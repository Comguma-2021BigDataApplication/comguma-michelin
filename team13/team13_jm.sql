CREATE TABLE menutbl (
resid INT NOT NULL,
naver_res_id VARCHAR(45) NOT NULL,
res_id INT NOT NULL,
res_name_ko VARCHAR(45) NOT NULL,
menu VARCHAR(45),
min_menu_price INT,
max_menu_price INT,
recommend TINYINT,
change_price VARCHAR(10)
) ENGINE=INNODB CHARSET=utf8mb4;

CREATE TABLE nametbl (
resid INT NOT NULL,
res_name_en VARCHAR(45) NOT NULL,
res_name_ko VARCHAR(45) NOT NULL,
PRIMARY KEY (resid)
) ENGINE=INNODB CHARSET=utf8mb4;

CREATE TABLE typetbl (
resid INT NOT NULL,
type_en VARCHAR(45),
type_ko VARCHAR(45),
PRIMARY KEY (resid)
) ENGINE=INNODB CHARSET=utf8mb4;

CREATE TABLE urltbl (
resid INT NOT NULL, 
res_url VARCHAR(1000)
) ENGINE=INNODB CHARSET=utf8mb4;