<?php

/**
 * @package     MRH FORM Project
 * @author      Boris ASSOI
 * @copyright   Copyright (c) 2020, Purine Consulting
 * @link        https://purineconsulting.com
 */

require 'vendor/autoload.php';

$router = new AltoRouter();

$router->addRoutes(array(
    /**
     * Login
     */
    array('GET', '/login/', function () {
        require __DIR__ . '/views/login/index.php';
    }, 'login'),
    array('GET', '/logout/', function () {
        require __DIR__ . '/views/login/index.php';
    }, 'logout'),

    /**
     * Menu
     */
    array('GET', '/', function () {
        require __DIR__ . '/views/dashboard/index.php';
    }, 'home'),
    array('GET', '/subscription/', function () {
        require __DIR__ . '/views/subscription/index.php';
    }, 'subscription'),
    array('GET', '/subscriber/', function () {
        require __DIR__ . '/views/subscriber/index.php';
    }, 'subscriber'),
    array('GET', '/payment/', function () {
        require __DIR__ . '/views/payment/index.php';
    }, 'payment'),
    array('GET', '/settings/', function () {
        require __DIR__ . '/views/settings/index.php';
    }, 'settings'),
    array('GET', '/user/', function () {
        require __DIR__ . '/views/user/index.php';
    }, 'user'),

    /**
     * Test
     */
    array('GET', '/test/', function () {
        require __DIR__ . '/src/controllers/testController.php';
    }, 'test'),

    /**
     * EndPoints pour Souscription
     */
    array('GET', '/subscriptions/', function () {
        try {
            $data = array();
            $sc = new SubscriptionController();
            $data = $sc->listDT();

            $output = array(
                "data"              => $data,
                "RecordsTotal"      => count($data),
                "RecordsFiltered"   => count($data)
            );

            echo json_encode(mb_convert_encoding($output, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_subscriptions'),
    array('GET', '/subscriptions/dashboard', function () {
        try {
            $data = array();
            $sc = new SubscriptionController();
            $data = $sc->getDashboard();

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_subscriptions_dashboard'),
    array('GET', '/subscriptions/[a:id]/', function ($params) {
        try {
            $data = array();
            $sc = new SubscriptionController();
            $data = $sc->read($_GET['id']);

            echo json_encode(mb_convert_encoding($data, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_subscription'),
    array('POST', '/subscriptions/', function () {
        try {
            $data = array();
            $sc = new SubscriptionController();
            $data = $sc->create($_POST['date'], $_POST['convention_number'], $_POST['loan_reference'], $_POST['seller'], $_POST['susbcriber']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'new_subscription'),
    array('PUT', '/subscriptions/', function () {
        try {
            $data = array();
            $sc = new SubscriptionController();

            if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
                $_PUT = array();
                parse_str(file_get_contents("php://input"), $_PUT);
                foreach ($_PUT as $key => $value) {
                    echo $key . " : " . $value;
                }
            }

            $data = $sc->update($_PUT['id'], $_PUT['date'], $_PUT['convention_number'], $_PUT['loan_reference'], $_PUT['seller'], $_PUT['susbcriber']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'update_subscription'),
    array('POST', '/subscriptions/cancel/', function () {
        try {
            $sc = new SubscriptionController();
            $sc->cancel($_POST['id']);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'cancel_subscription'),
    array('GET', '/subscriptions/[a:id]/payments', function ($params) {
        try {
            $data = array();
            $sc = new SubscriptionController();
            $data = $sc->getPayments($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_subscription_payments'),

    /**
     * EndPoints pour les Ayant-Droits
     */
    array('POST', '/beneficiaries', function () {
        try {
            $data = array();
            $bc = new BeneficiaryController();

            $data = $bc->create($_POST['firstname'], $_POST['lastname'], $_POST['subscriber']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'new_beneficiary'),
    array('GET', '/beneficiaries', function () {
        try {
            $data = array();
            $bc = new BeneficiaryController();

            $data = $bc->list();

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_beneficiaries'),
    array('GET', '/beneficiaries/[a:id]', function () {
        try {
            $data = array();
            $bc = new BeneficiaryController();

            $data = $bc->read($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_beneficiary'),

    /**
     * Endpoints pour Paiement
     */
    array('GET', '/payments/', function () {
        try {
            $data = array();
            $pc = new PaymentController();
            $data = $pc->listDT();

            $output = array(
                "data"              => $data,
                "RecordsTotal"      => count($data),
                "RecordsFiltered"   => count($data)
            );

            echo json_encode(mb_convert_encoding($output, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_payments'),
    array('POST', '/payment/', function () {
        try {
            $data = array();
            $pc = new PaymentController();

            $data = $pc->create($_POST['reference'], $_POST['date'], $_POST['subscription']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'new_payment'),

    /**
     * EndPoints pour Agence
     */
    array('GET', '/offices/', function () {
        try {
            $data = array();
            $oc = new OfficeController();

            $data = $oc->list();

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_offices'),
    array('GET', '/offices/[a:id]', function () {
        try {
            $data = array();
            $oc = new OfficeController();

            $data = $oc->read($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_office'),
    array('POST', '/offices/', function () {
        try {
            $data = array();
            $oc = new OfficeController();

            $data = $oc->create($_POST['name'], $_POST['address'], $_POST['supervisor']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'new_office'),
    array('PUT', '/offices/', function () {
        try {
            $data = array();
            $oc = new OfficeController();

            if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
                $_PUT = array();
                parse_str(file_get_contents("php://input"), $_PUT);
                foreach ($_PUT as $key => $value) {
                    echo $key . " : " . $value;
                }
            }

            $data = $oc->update($_PUT['id'], $_PUT['name'], $_PUT['address'], $_PUT['supervisor']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'update_office'),
    array('GET', '/offices/[a:id]/payments', function () {
        try {
            $data = array();
            $oc = new OfficeController();

            $data = $oc->getPayments($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_office_payments'),

    /**
     * EndPoints pour Producteur
     */
    array('GET', '/producers/', function () {
        try {
            $data = array();
            $pc = new ProducerController();

            $data = $pc->list();

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_producers'),
    array('GET', '/producers/[a:id]', function () {
        try {
            $data = array();
            $pc = new ProducerController();

            $data = $pc->read($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_producer'),
    array('POST', '/producers/', function () {
        try {
            $data = array();
            $pc = new ProducerController();

            $data = $pc->create($_POST['user'], $_POST['office']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'new_producer'),
    array('PUT', '/producers/', function () {
        try {
            $data = array();
            $pc = new ProducerController();

            if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
                $_PUT = array();
                parse_str(file_get_contents("php://input"), $_PUT);
                foreach ($_PUT as $key => $value) {
                    echo $key . " : " . $value;
                }
            }

            $data = $pc->update($_PUT['user'], $_PUT['office']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'update_producer'),
    array('GET', '/producers/[a:id]/payments', function () {
        try {
            $data = array();
            $pc = new ProducerController();

            $data = $pc->getPayments($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_producer_payments'),

    /**
     * EndPoints pour Souscripteur
     */
    array('GET', '/subscribers/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();
            $data = $sc->listDT();

            $output = array(
                "data"              => $data,
                "RecordsTotal"      => count($data),
                "RecordsFiltered"   => count($data)
            );

            echo json_encode(mb_convert_encoding($output, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_subscribers'),
    array('GET', '/subscribers/autocomplete/[a:term]/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();
            $subscribers = $sc->searchByKey($_GET['term']);

            foreach ($subscribers as $subscriber) {
                $sub_array["id"]      = $subscriber["id"];
                $sub_array["label"]   = $subscriber["firstname"] . ' - ' . $subscriber["lastname"];
                $sub_array["value"]   = $subscriber["firstname"] . ' - ' . $subscriber["lastname"];

                $data[] = $sub_array;
            }
            
            echo json_encode(mb_convert_encoding($data, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'list_subscribers_autocomplete'),
    array('GET', '/subscribers/[a:id]/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();

            $data = $sc->read($_GET['id']);

            echo json_encode(mb_convert_encoding($data, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_subscriber'),
    array('POST', '/subscribers/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();
            $subscriber = $sc->create($_POST['firstname'], $_POST['lastname'], $_POST['address'], $_POST['phone'], $_POST['email'], $_POST['birth_date'], $_POST['birth_place'], $_POST['work'], $_POST['company'], $_POST['account_number'], $_POST['account_type']);

            $data = $sc->read($subscriber);
            http_response_code(201);
            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'new_subscriber'),
    array('PUT', '/subscribers/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();
            $_PUT = array();
            if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
                parse_str(file_get_contents('php://input', false , null, 0 , $_SERVER['CONTENT_LENGTH'] ), $_PUT);
                // foreach ($_PUT as $key => $value) {
                //     echo $key . " : " . $value;
                // }
            }
            // $sc->update($_PUT['id'], $_PUT['firstname'], $_PUT['lastname'], $_PUT['address'], $_PUT['phone'], $_PUT['email'], $_PUT['birth_date'], $_PUT['birth_place'], $_PUT['work'], $_PUT['company'], $_PUT['account_number'], $_PUT['account_type']);
            $data = $sc->read($_PUT['id']);
            http_response_code(200);
            echo json_encode(file_get_contents('php://input', false , null, 0 , $_SERVER['CONTENT_LENGTH'] ));
        } catch (\Exception $e) {
            http_response_code(400);
            die('Erreur : ' . $e->getMessage());
        }
    }, 'update_subscriber'),
    array('DELETE', '/subscribers/', function () {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
                $_DELETE = array();
                parse_str(file_get_contents("php://input"), $_DELETE);
                foreach ($_DELETE as $key => $value) {
                    echo $key . " : " . $value;
                }
            }
            $sc = new SubscriberController();
            $sc->delete($_DELETE['id']);
            http_response_code(204);
        } catch (\Exception $e) {
            http_response_code(400);
            die('Erreur : ' . $e->getMessage());
        }
    }, 'delete_subscriber'),
    array('GET', '/subscribers/[a:id]/subscriptions/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();

            $data = $sc->getSubscriptions($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_subscriber_subscriptions'),
    array('GET', '/subscribers/[a:id]/payments/', function () {
        try {
            $data = array();
            $sc = new SubscriberController();

            $data = $sc->getPayments($_GET['id']);

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_subscriber_payments'),

    /**
     * Endpoints pour Utilisateur
     */
    array('POST', '/user/login/', function () {
        try {
            $uc = new UserController();
            $uc->login($_POST['username'], $_POST['password']);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'user_login'),
    array('POST', '/user/', function () {
        try {
            $uc = new UserController();
            $uc->create(
                $_POST['user_username'],
                $_POST['user_password'],
                $_POST['user_firstname'],
                $_POST['user_lastname'],
                $_POST['user_email'],
                $_POST['user_phone'],
                $_POST['user_address'],
                $_POST['user_role']
            );
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'add_new_user'),
    array('GET', '/users/', function () {
        try {
            $data = array();
            $uc = new UserController();
            $data = $uc->listDT();

            $output = array(
                "data"              => $data,
                "RecordsTotal"      => count($data),
                "RecordsFiltered"   => count($data)
            );

            echo json_encode(mb_convert_encoding($output, "UTF-8", "UTF-8"));
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'get_users'),
    array('POST', '/user/desactivate/', function () {
        try {
            $uc = new UserController();
            $uc->desactivate($_POST['id']);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'desactivate_user'),
    array('POST', '/user/activate/', function () {
        try {
            $uc = new UserController();
            $uc->activate($_POST['id']);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'activate_user'),
    array('POST', '/user/delete/', function () {
        try {
            $uc = new UserController();
            $uc->delete($_POST['id']);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'delete_user'),
    array('POST', '/user/checkUsername/', function () {
        try {
            $uc = new UserController();
            $data = array();

            $user = $uc->checkUsername($_POST['username']);
            if ($user) {
                $data['result'] = true;
            }

            echo json_encode($data);
        } catch (\Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }, 'check_username'),
));

$match = $router->match();

if ($match) {
    $_GET = $match['params'];
}

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
