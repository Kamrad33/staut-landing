<?php
    require("B24Order.php");

    $restApiUrl = "https://b24-cc2893.bitrix24.ru/rest/1/gjdsgvadl8mweai2/crm.lead.add.json"; // урл из настроек Б24
    $userId = 1; // ID пользователя, который будет ответственным за лид

    $leadSender = new \Staut\B24Order($restApiUrl, $userId);

    header('Content-type: application/json; charset=utf-8');
    $req = json_decode(file_get_contents('php://input'), true);

    $leadSender->SetName($req['userName']);
    $leadSender->AddPhone($req['userPhone']);
    $leadSender->SetComment($req['userComment']);
    $leadSender->SetTitle("Заказ обратного звонка от: {$req['userName']}");
    // $leadSender->SetFile($req['files']);

    // $leadSender->SetName("NAME");
    // $leadSender->AddPhone("123123");
    // $leadSender->SetComment("COMMENT");
    // $leadSender->SetTitle("Заказ обратного звонка от: NAME");

    // когда все данные заполнили - отправляем лид
    if ($leadSender->Send()) {
        echo "<p>Лид успешно отправлен.</p>";
    } else { // если лид не отправлен - в GetError() будет текст ошибки
        echo "<p>При отправке лида возникла ошибка: {$leadSender->GetError()}</p>";

        // сразу можем посмотреть, какие данные мы пытались отправить
        // чтобы быстрее найти причину ошибки
        /*
            echo "<pre>";
            print_r($leadSender->GetQueryData());
            echo "</pre>";
        */
    }