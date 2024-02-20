-- สร้างตาราง book
CREATE TABLE book (
    bookId INT PRIMARY KEY,
    bookName VARCHAR(200) NOT NULL
);

-- เพิ่มข้อมูลตัวอย่าง
INSERT INTO book (bookId, bookName) VALUES
(1, 'Book 1'),
(2, 'Book 2'),
(3, 'Book 3');
