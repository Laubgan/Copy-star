-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3360
-- Время создания: Апр 12 2022 г., 21:54
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `copy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES
(1, 'Генадий', 'Иванов', 'Викторович', 'Gena', 'g@mail.ru', '123'),
(2, 'Иван', 'Иванов', 'Иванович', 'Ivan', 'Ivan@mail.ru', '123'),
(3, 'Максим', 'Гусев', 'Геннадиевич', 'Max', 'm@mail.ru', '123'),
(4, 'Админ', 'Админ', 'Админ', 'admin', 'a@mail.ru', 'admin11'),
(5, 'йцуке', 'йцукеыы', 'йцукец', 'Dima', 'Dima@mail.ru', '40090b25eb5ad2333d6a43d1c2c1902a'),
(6, 'Дмитрий', 'Лаубган', 'Русланович', 'Dmitry', 'Dima@mail.ru', '40090b25eb5ad2333d6a43d1c2c1902a'),
(7, 'Костя', 'Лаубган', 'фывфывфыв', 'Dima', 'Dima@mail.ru', '40090b25eb5ad2333d6a43d1c2c1902a'),
(8, 'админ', 'админ', 'админ', 'admin ', 'admin@mail.ru', 'admin11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
