SELECT count(id_film) AS 'movies' FROM member_history
	WHERE date BETWEEN 10/30/2006 AND 07/27/2007 OR month(date) = 12 AND day(date) = 24;
