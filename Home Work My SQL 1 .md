1 - ������� ���� ������� ������������ �� �����
2 - ������� ���� ������� � ������ ������������� �� ����� "�"
3-  ������� ���� ������� ���������� ����� 1970 ����
4 - ������� ���������� ���� �������� � 2000 ����


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
