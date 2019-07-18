use website;

CREATE TABLE posts (
  id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  author varchar(255),
  post varchar(255),
  dateposted varchar(255)
);
