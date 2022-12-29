CREATE DATABASE IF NOT EXISTS db_diffa;

CREATE TABLE barang { kode_brg CHAR(5) PIMARY KEY,
nama_brg VARCHAR(30),
harga_satuan DOUBLE,
stok INT(5) };

INSERT INTO barang VALUES ("B-001","Komputer",8000000,25);
INSERT INTO barang VALUES ("B-002","Laptop",20000000,50);
INSERT INTO barang VALUES ("B-003","Mouse",25000,100);
INSERT INTO barang VALUES ("B-004","Printer",20000000,25);
INSERT INTO barang VALUES ("B-005","Flashdisk",50000,100);