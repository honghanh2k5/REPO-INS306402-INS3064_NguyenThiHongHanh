-- TẠO DATABASE
CREATE DATABASE IF NOT EXISTS library_db;
USE library_db;

-- =========================
-- BẢNG: books (lưu thông tin sách)
-- =========================
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,        -- Mã sách (tự tăng)
    isbn VARCHAR(20) UNIQUE NOT NULL,         -- Mã ISBN (không trùng)
    title VARCHAR(150) NOT NULL,              -- Tên sách
    author VARCHAR(100) NOT NULL,             -- Tác giả
    publisher VARCHAR(100),                   -- Nhà xuất bản
    publication_year INT,                     -- Năm xuất bản
    available_copies INT NOT NULL             -- Số lượng còn lại
);

-- =========================
-- BẢNG: borrow_transactions (lưu thông tin mượn sách)
-- =========================
CREATE TABLE borrow_transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,        -- Mã giao dịch
    book_id INT NOT NULL,                     -- Mã sách (khóa ngoại)
    borrower_name VARCHAR(100) NOT NULL,      -- Tên người mượn
    borrow_date DATE NOT NULL,                -- Ngày mượn
    due_date DATE NOT NULL,                   -- Hạn trả
    return_date DATE DEFAULT NULL,            -- Ngày trả (có thể null)
    status ENUM('Borrowed', 'Returned', 'Overdue') DEFAULT 'Borrowed',  -- Trạng thái
    FOREIGN KEY (book_id) REFERENCES books(id)  -- Liên kết tới bảng books
);

-- =========================
-- DỮ LIỆU MẪU: books
-- =========================
INSERT INTO books (isbn, title, author, publisher, publication_year, available_copies) VALUES
('9780132350884', 'Clean Code', 'Robert C. Martin', 'Prentice Hall', 2008, 5),
('9780201616224', 'The Pragmatic Programmer', 'Andrew Hunt', 'Addison-Wesley', 1999, 3),
('9780131103627', 'The C Programming Language', 'Kernighan and Ritchie', 'Prentice Hall', 1988, 4),
('9780596007126', 'Head First Design Patterns', 'Eric Freeman', 'OReilly Media', 2004, 6),
('9780134494166', 'Clean Architecture', 'Robert C. Martin', 'Prentice Hall', 2017, 2),
('9781491950296', 'Learning PHP, MySQL & JavaScript', 'Robin Nixon', 'OReilly Media', 2018, 7),
('9780137081073', 'PHP and MySQL Web Development', 'Luke Welling', 'Addison-Wesley', 2013, 5),
('9781492052203', 'Laravel: Up and Running', 'Matt Stauffer', 'OReilly Media', 2023, 3),
('9780321125217', 'Domain-Driven Design', 'Eric Evans', 'Addison-Wesley', 2003, 2),
('9780262033848', 'Introduction to Algorithms', 'Thomas H. Cormen', 'MIT Press', 2009, 4);

-- =========================
-- DỮ LIỆU MẪU: borrow_transactions
-- =========================
INSERT INTO borrow_transactions (book_id, borrower_name, borrow_date, due_date, return_date, status) VALUES
(1, 'Nguyen Van A', '2026-03-20', '2026-03-27', NULL, 'Borrowed'),
(2, 'Tran Thi B', '2026-03-15', '2026-03-22', '2026-03-21', 'Returned'),
(3, 'Le Minh C', '2026-03-10', '2026-03-17', NULL, 'Overdue'),
(4, 'Pham Gia D', '2026-03-18', '2026-03-25', NULL, 'Borrowed'),
(5, 'Hoang Lan E', '2026-03-12', '2026-03-19', '2026-03-18', 'Returned');