USE interfaceperso ;

DROP TABLE if exists weather ;

CREATE TABLE weather (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    city VARCHAR(128) NOT NULL,
    refer INT NOT NULL,
    expiration DATETIME NOT NULL,
    datas TEXT NOT NULL
) engine=innodb character set utf8 collate utf8_unicode_ci ;
