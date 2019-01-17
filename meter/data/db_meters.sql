-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 17 2019 г., 11:04
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_meters`
--

-- --------------------------------------------------------

--
-- Структура таблицы `meters`
--

CREATE TABLE `meters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cardStyle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `meters`
--

INSERT INTO `meters` (`id`, `title`, `site`, `image`, `cardStyle`) VALUES
(1, 'Водоканал', 'http://www.vodokanal.zp.ua', 'http://www.vodokanal.zp.ua/img/logo.png?t=1547669402.5909', 'info'),
(2, 'Теплосети', 'http://teploseti.zp.ua', 'http://teploseti.zp.ua/bitrix/templates/inside_ru/images/logo.png', 'danger'),
(3, 'Запорожьеоблэнерго', 'http://www.zoe.com.ua', 'http://www.zoe.com.ua/wp-content/themes/zoetheme/img/zoe_logo-min.png', 'warning');

-- --------------------------------------------------------

--
-- Структура таблицы `t_reading`
--

CREATE TABLE `t_reading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meterId` int(11) NOT NULL,
  `date` date NOT NULL,
  `reading` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `t_reading`
--

INSERT INTO `t_reading` (`id`, `meterId`, `date`, `reading`) VALUES
(3, 1, '2019-01-01', 631.197),
(4, 2, '2019-01-01', 695.925),
(5, 3, '2019-01-01', 2401.1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `meters`
--
ALTER TABLE `meters`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `t_reading`
--
ALTER TABLE `t_reading`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `meters`
--
ALTER TABLE `meters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `t_reading`
--
ALTER TABLE `t_reading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
