<?php
 
// Токен
  const TOKEN = ''; // заполняется на проде
 
// ID чата
  const CHATID = ''; // заполняется на проде
 
  // Массив допустимых значений типа файла.
  $types = array('image/gif', 'image/png', 'image/jpeg', 'application/pdf');
 
  // Максимальный размер файла в килобайтах
  // 1048576; // 1 МБ
  $size = 1073741824; // 1 ГБ
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $fileSendStatus = '';
  $textSendStatus = '';
  $msgs = [];

  // Проверяем не пусты ли поля с именем и телефоном
  if (!empty($_POST['userName']) && !empty($_POST['userPhone'])) {
     
    // Если не пустые, то валидируем эти поля и сохраняем и добавляем в тело сообщения. Минимально для теста так:
    $txt = "";
     
    // Имя
    if (isset($_POST['userName']) && !empty($_POST['userName'])) {
        $txt .= "Имя клиента: " . strip_tags(trim(urlencode($_POST['userName']))) . "%0A";
    }
     
    // Номер телефона
    if (isset($_POST['userPhone']) && !empty($_POST['userPhone'])) {
        $txt .= "Телефон: " . strip_tags(trim(urlencode($_POST['userPhone']))) . "%0A";
    }
     
    // Не забываем про тему сообщения
    if (isset($_POST['userComment']) && !empty($_POST['userComment'])) {
        $txt .= "Комментарий: " . strip_tags(urlencode($_POST['userComment']));
    }
 
    $textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt); 
 
    if( isset(json_decode($textSendStatus)->{'ok'}) && json_decode($textSendStatus)->{'ok'} ) {
      if (!empty($_FILES['files']['tmp_name'])) {
     
          $urlFile =  "https://api.telegram.org/bot" . TOKEN . "/sendMediaGroup";
           
          // Путь загрузки файлов
          $path = $_SERVER['DOCUMENT_ROOT'] . '/tmp/';
           
          // Загрузка файла и вывод сообщения
          $mediaData = [];
          $postContent = [
            'chat_id' => CHATID,
          ];
       
          for ($ct = 0; $ct < count($_FILES['files']['tmp_name']); $ct++) {
            // echo json_encode('FILESSSSS');
            // echo json_encode($_FILES['files']['tmp_name'][$ct]);
            // echo json_encode($path. $_FILES['files']['name'][$ct]);
            if ($_FILES['files']['name'][$ct] && @copy($_FILES['files']['tmp_name'][$ct], $path. $_FILES['files']['name'][$ct])) {
              if ($_FILES['files']['size'][$ct] < $size && in_array($_FILES['files']['type'][$ct], $types)) {
                $filePath = $path . $_FILES['files']['name'][$ct];
                $postContent[$_FILES['files']['name'][$ct]] = new CURLFile(realpath($filePath));
                $mediaData[] = ['type' => 'document', 'media' => 'attach://'. $_FILES['files']['name'][$ct]];
              }
            }
          }
       
          $postContent['media'] = json_encode($mediaData);
       
          $curl = curl_init();
          curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
          curl_setopt($curl, CURLOPT_URL, $urlFile);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $postContent);
          $fileSendStatus = curl_exec($curl);
          curl_close($curl);
          $files = glob($path.'*');
          foreach($files as $file){
            if(is_file($file))
              unlink($file);
          }
          // echo json_encode($_FILES['files']['tmp_name']);
      } else {
        // echo json_encode('EMTY FILES');
      }
      // echo json_encode('SUCCESS');
    } else {
      // echo json_encode('ERROR');
      // 
      // echo json_decode($textSendStatus);
    }
  } else {
    // echo json_encode('NOTVALID');
  }
} else {
  header("Location: /");
}