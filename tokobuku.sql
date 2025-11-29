CREATE DATABASE tokobuku;

USE tokobuku;

CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    penulis VARCHAR(100),
    harga INT
);

INSERT INTO buku (judul, penulis, harga)
VALUES ('Belajar Memancing Di Fist it!', 'Muhammad Rafi Abdullah', 75000);
