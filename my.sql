-- create
CREATE TABLE INFO_PERSONS (
    empId INTEGER PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    age INTEGER NOT NULL, --  TEXT это обозначение строки, а  INTEGER что будут числа
    address TEXT NOT NULL
);
-- insert
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Boris', 18, 'Moskva');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Nikolay', 30, 'Moskva');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Anna', 20, 'Voronezh');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Dmitry', 45, 'Moskva');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Valentin', 34, 'Novgorod');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Svetlana', 27, 'Moskva');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Ivan', 19, 'Sochi');
INSERT INTO INFO_PERSONS (name, age, address)
VALUES ('Dmitry', 29, 'Moskva');
-- fetch 
SELECT * -- name
FROM INFO_PERSONS
WHERE age >= 18 AND age < 30       --  или записать так BETWEEN 18 AND 29
    -- AND address = 'Moskva';    --  или WHERE age BETWEEN 18 AND 30 - 1



    -- 2. Создать файл my.sql,
    --  в котором должна создаваться таблица с информацией об одногруппниках.
    -- В таблице должно быть четыре поля: id, name, age, address.
    -- Все поля в таблице обязательны для заполнения.
    -- Необходимо добавить 5-10 одногруппников в данную таблицу.
    -- Необходимо написать запрос на получение имен всех одногруппников (только имен, без всего остального),
    -- которые живут в Москве и их возраст находится в диапазоне [18, 30) лет. 
    -- Примечание:
    -- Квадратные скобки при указании диапазона,
    -- означают "включительно", а круглые "не включительно",
    -- то есть диапазон (7, 9] означает "от 7, где 7 не попадает в данный диапазон,
    -- до 9 включительно". Такой синтаксис нельзя использовать в sql,
    -- вам нужно найти решение, как такое условие можно записать в sql по-другому.
    -- Для проверок работы своего скрипта можете использовать свою базу данных,
    -- либо используйте сайт: https://onecompiler.com/mysql