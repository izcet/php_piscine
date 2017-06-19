SELECT substring(reverse(phone_number), 1, length (phone_number) -1) AS 'rebmunenohp'
	FROM distrib
		WHERE phone_number LIKE '05%';
