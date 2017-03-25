DROP TABLE IF EXISTS Info;

CREATE TABLE IF NOT EXISTS Info (
    InfoId INT primary key not null auto_increment,
    InfoContent VARCHAR(255),
    InfoTime DATETIME
);
