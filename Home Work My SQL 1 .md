1 - вывести всех авторов отсортировав по имени
2 - вывести всех авторов с именем начинающимися на букву "а"
3-  вывести всех авторов родившихся после 1970 года
4 - вывести количество книг изданных в 2000 году


1-SELECT *
FROM `authors`
ORDER BY name
----------------------------------
2-SELECT name
FROM `authors`
WHERE name LIKE 'A%'
----------------------------------
3 - SELECT *
FROM `authors`
WHERE birth_date >'1971.01.01'
-----------------------------------
4 - SELECT title
FROM `books`
WHERE publication_year LIKE '%2000%'
