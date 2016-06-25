SELECT *
FROM `authors`
ORDER BY name
----------------------------------
SELECT name
FROM `authors`
WHERE name LIKE 'A%'
----------------------------------
SELECT *
FROM `authors`
WHERE birth_date >'1971.01.01'
-----------------------------------
SELECT title
FROM `books`
WHERE publication_year LIKE '%2000%'

