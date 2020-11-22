<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\PhpRenderer;

return function (ContainerBuilder $containerBuilder) {
    $container = [];

    $container[LoggerInterface::class] = function (ContainerInterface $c) {
        $settings = $c->get('settings');

        $loggerSettings = $settings['logger'];
        $logger = new Logger($loggerSettings['name']);

        $processor = new UidProcessor();
        $logger->pushProcessor($processor);

        $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
        $logger->pushHandler($handler);

        return $logger;
    };

    $container['renderer'] = function (ContainerInterface $c) {
        $settings = $c->get('settings')['renderer'];
        $renderer = new PhpRenderer($settings['template_path']);
        return $renderer;
    };

    $container['DbConnector'] = DI\Factory('\App\DbConnector');
    $container['TaskModel'] = DI\Factory('\App\Factories\TaskModelFactory');
    $container['HomepageController'] = DI\Factory('\App\Factories\HomepageControllerFactory');
    $container['DeleteTaskController'] = DI\Factory('\App\Factories\DeleteTaskControllerFactory');
    $container['CompletedTaskPageController'] = DI\Factory('\App\Factories\CompletedTaskPageControllerFactory');
    $container['MarkCompleteController'] = DI\Factory('\App\Factories\MarkCompleteControllerFactory');
    $container['StoreTaskController'] = DI\Factory('\App\Factories\StoreTaskControllerFactory');
    $container['UpdateTaskController'] = DI\Factory('\App\Factories\UpdateTaskControllerFactory');


    $containerBuilder->addDefinitions($container);
};
