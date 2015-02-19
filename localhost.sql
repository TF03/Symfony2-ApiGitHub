-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 19 2015 г., 16:32
-- Версия сервера: 5.5.35
-- Версия PHP: 5.4.27-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `git_hub`
--
CREATE DATABASE `git_hub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `git_hub`;

-- --------------------------------------------------------

--
-- Структура таблицы `like_repo`
--

CREATE TABLE IF NOT EXISTS `like_repo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `likeU` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=124 ;

--
-- Дамп данных таблицы `like_repo`
--

INSERT INTO `like_repo` (`id`, `login`, `likeU`) VALUES
(1, 'samdark', 1),
(2, 'yiisoft', 0),
(3, 'crisu83', 1),
(4, 'yiisoftyii', 1),
(5, 'qiangxue', 0),
(6, 'mdomba', 0),
(7, 'resurtm', 0),
(8, 'cebe', 1),
(9, 'klimov-paul', 0),
(10, 'DaSourcerer', 0),
(11, 'softark', 0),
(12, 'creocoder', 0),
(13, 'joujiahe', 0),
(14, 'kidol', 0),
(15, 'Borales', 1),
(16, 'phpnode', 0),
(17, 'davidhrbac', 0),
(18, 'tom--', 0),
(19, 'suralc', 0),
(20, 'lubosdz', 0),
(21, 'marcovtwout', 0),
(22, 'sebathi', 0),
(23, 'Yiivgeny', 0),
(24, 'nineinchnick', 0),
(25, 'acorncom', 0),
(26, 'SonkoDmitry', 0),
(27, 'lightglitch', 0),
(28, 'munawer-t', 0),
(29, 'emanwebdev', 0),
(30, 'nsanden', 0),
(31, 'janisto', 0),
(32, 'rawtaz', 0),
(33, 'adminnu', 0),
(34, 'yiisoft/yii2', 0),
(35, 'yiisoft/yii', 0),
(36, 'clevertech/YiiBooster', 0),
(37, 'clevertech/YiiBoilerplate', 0),
(38, 'crisu83/yiistrap', 0),
(39, 'mishamx/yii-user', 0),
(40, 'yiiext/imperavi-redactor-widget', 0),
(41, 'erikuus/Yii-Playground', 0),
(42, 'thyseus/yii-user-management', 0),
(43, 'Nodge/yii-eauth', 0),
(44, 'giovdk21/yiiplayground', 0),
(45, 'crisu83/yii-auth', 0),
(46, 'vova07/yii2-start', 0),
(47, 'dektrium/yii2-user', 0),
(48, 'yiisoft/yii2-app-advanced', 0),
(49, 'malyshev/yii-debug-toolbar', 0),
(50, 'evan108108/RESTFullYii', 0),
(51, '2amigos/yiiwheels', 0),
(52, 'drumaddict/angular-yii', 0),
(53, 'gsalgadotoledo/yii-facilito', 0),
(54, 'tyohan/MongoRecord', 0),
(55, 'phundament/app', 0),
(56, 'mdmsoft/yii2-admin', 0),
(57, 'kartik-v/yii2-widgets', 0),
(58, 'yii2-chinesization/yii2-zh-cn', 0),
(59, 'crisu83/yii-app', 0),
(60, 'charlesportwoodii/CiiMS', 0),
(61, 'Sammaye/MongoYii', 0),
(62, 'trntv/yii2-starter-kit', 0),
(63, 'kartik-v/yii2-grid', 0),
(64, 'clevertechYiiBoilerplate', 0),
(65, 'yiisoftyii2', 0),
(66, 'clevertechYiiBooster', 0),
(67, 'crisu83yiistrap', 0),
(68, 'thyseusyii-user-management', 0),
(69, '2amigosyiiwheels', 0),
(70, 'zendframework/zf2', 0),
(71, 'zendframework/ZendSkeletonApplication', 0),
(72, 'zendframework/zf2-documentation', 0),
(73, 'ZF-Commons/ZfcUser', 0),
(74, 'doctrine/DoctrineModule', 0),
(75, 'doctrine/DoctrineORMModule', 0),
(76, 'zendframework/modules.zendframework.com', 0),
(77, 'zendframework/ZendDeveloperTools', 0),
(78, 'zendtech/ZendOptimizerPlus', 0),
(79, 'zendframework/ZFTool', 0),
(80, 'zendframework/zf-web', 0),
(81, 'ZF-Commons/zfc-rbac', 0),
(82, 'guilhermeblanco/zendframework1-doctrine2', 0),
(83, 'zendframework/ZendSkeletonModule', 0),
(84, 'Emagister/zend-form-decorators-bootstrap', 0),
(85, 'maxgutman/zendesk', 0),
(86, 'colinmollenhour/Cm_Cache_Backend_Redis', 0),
(87, 'jokkedk/ZFDebug', 0),
(88, 'eneifert/ZendeskApi_v2', 0),
(89, 'zendesk/zendesk_api_client_rb', 0),
(90, 'coen-hyde/Shanty-Mongo', 0),
(91, 'neilime/zf2-twb-bundle', 0),
(92, 'michael-romer/zf-boilerplate', 0),
(93, 'GotCms/GotCms', 0),
(94, 'doctrine/DoctrineMongoODMModule', 0),
(95, 'blakmatrix/node-zendesk', 0),
(96, 'RWOverdijk/AssetManager', 0),
(97, 'cloudbees/zendesk-java-client', 0),
(98, 'widmogrod/zf2-assetic-module', 0),
(99, 'komola/Bootstrap-Zend-Framework', 0),
(100, 'zendframeworkzf2', 1),
(101, 'zendframeworkzf2-documentation', 1),
(102, 'Ragazzo', 0),
(103, 'tonydspaniard', 0),
(104, 'lucianobaraglia', 0),
(105, 'qiansen1386', 0),
(106, 'LarryUllman', 0),
(107, 'AbrahamGreyson', 0),
(108, 'schmunk42', 0),
(109, 'kartik-v', 0),
(110, 'pana1990', 0),
(111, 'funson86', 0),
(112, 'thiagotalma', 0),
(113, 'Alex-Code', 0),
(114, 'pmoust', 0),
(115, 'klevron', 0),
(116, 'davidsonalencar', 0),
(117, 'larnu', 0),
(118, 'cdvrooman', 0),
(119, 'mongosoft', 0),
(120, 'TimurMelnikov', 0),
(121, 'RichWeber', 0),
(122, 'dizews', 0),
(123, 'AlexGx', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
