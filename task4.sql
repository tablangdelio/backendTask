
SELECT 
    authors.first_name, 
    books.book_name, 
    books.publish_date 
    FROM authors JOIN books 
    ON authors.id = books.author_id 
    WHERE books.id = ( SELECT MAX(books.id) FROM books 
                        WHERE MONTHNAME(publish_date) = 'January' 
                        AND YEAR(publish_date) = '2021');   


SELECT 
    authors.first_name, 
    books.book_name, 
    books.publish_date 
    FROM authors JOIN books 
    ON authors.id = books.author_id 
    WHERE MONTHNAME(publish_date) = 'January' 
                        AND YEAR(publish_date) = '2021' ORDER BY books.id DESC LIMIT 1;