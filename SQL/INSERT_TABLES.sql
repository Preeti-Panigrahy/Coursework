INSERT INTO ROOM_TYPE(`room_type_id`, `room_type_name`, `room_cost`, `room_type_description`, `smoke_friendly`, `pet_friendly`)
 VALUES 
	(1, 'Standard Room','103',"1 King Bed 323-sq-foot (30-sq-meter) room with city views",0,1),
	(2, 'Standard Twin Room','123',"Two Twin Bed 323-sq-foot (30-sq-meter) room with city views",1,1),
	(3, 'Executive Room','130',"1 King Bed 323-sq-foot (30-sq-meter) room with city views",0,0),
	(4, 'Club Room','159',"2 King Bed 323-sq-foot (30-sq-meter) room with city views",1,1);
	

INSERT INTO GUESTS(`guest_id`, `guest_first_name`, `guest_last_name`, `guest_contact_number`, `guest_email_address`)
VALUES 
	(1,'Jane','Doe','132-456-8564','jane.doe@gmail.com'),
	(2,'Jerry','Thachter','564-896-4752','jerry.ytsvg@gmail.com'),
	(3,'Rihanna','Perry','745-986-7451','rih.vfdj89@gmail.com'),
	(4,'Mathew','Jose','489-624-8633','mathew.jose@gmail.com'),
	(5,'Jessica','Smith','487-956-8963','jess.smith@gmail.com');
	
	
INSERT INTO HOTEL_CHAINS(`hotel_chain_id`, `hotel_chain_name`) 
VALUES
	(1,'Best Western Hotels'),
	(2,'Marriott Hotels'),
	(3,'Elite Hotels'),
	(4,'Cosmopolitan Hotels'),
	(5,'Prestige Hotels');
	
	
INSERT INTO REF_COUNTRY_CODE (`country_id`,`country_currency`,`country_name`,`standard_exchg_rate`)
VALUES
	(1, 'GBP', 'United Kingdom',1.33),
	(2, 'USD','United States Of America',1),
	(3, 'INR','India',0.013),
	(4, 'AUD','Australia',0.73),
	(5,'CAD','Canada',0.76),
	(6, 'EUR','Europe',1.18);
	


INSERT INTO HOTELS (`hotel_id`, `hotel_chains_hotel_chain_id`,`ref_country_code_country_id`,`hotel_name`, `email_address`,`hotel_address`,`hotel_url`,`hotel_contact_number`)
	VALUES 
		(1, 1, 2, 'Best Western Cabrillo Garden Inn', "groups@bestwestern.co.uk", "840 A Street San Diego, California 92101 United States", 'https://www.bestwesternCA.co.uk/', '619-234-8477'),
		(2, 1, 6, "Yooma Urban Lodge, BW Premier Collection", "groupsbrussel@bestwestern.co.uk", "Square de L'Aviation 23-27 Brussels, 1070 Belgium", 'https://www.bestwesternbrussels.co.uk/', '32-2-5206565'),
		(3, 2, 3, 'Bengaluru Marriott Hotel Whitefield', "mhrs.blrwf.reservations@marriott.com", "8th Road, Plot No 75, EPIP Area, Whitefield, Bengaluru  560066 India", 'https://www.marriott.co.uk/hotels/travel/blrwf-bengaluru-marriott-hotel-whitefield/', '80-4943-5000'),
		(4, 2, 4, 'Melbourne Marriott Hotel', "mhrs.melmc.reservations@marriott.com", "Corner Exhibition & Lonsdale Streets, Melbourne  3000 Australia", 'https://www.marriott.com/hotels/travel/melmc-melbourne-marriott-hotel/', '+61396623900'),
		(5, 2, 5, 'Toronto Marriott City Centre Hotel', "mhrs.yyzcc.reservations@marriott.com", "One Blue Jays Way, Toronto, Ontario M5V 1J4 Canada", 'https://www.marriott.com/hotels/travel/yyzcc-toronto-marriott-city-centre-hotel/', '416-341-7100'),
		(6, 3, 1, "Ashdown Park Hotel & Country Club", "enquiries@ashdownpark.co.uk", "Wych Cross, Forest Row, East Grinstead RH18 5JR", 'https://www.ashdownpark.com/', '01342-824988'),
		(7, 4, 6, 'Cosmopolitan Hotels', "info@chgroup.eu", "Largo Belvedere, 26 - 56128 - TIRRENIA - PISA - IT", 'https://www.chgroup.eu/', '39-050-37031'),
		(8, 5, 5, 'Prestige Beach House', "Kelowna@PrestigeHotels.ca", "1675 Abbott Street Kelowna, BC V1Y 8S3", 'https://www.prestigehotelsandresorts.com/locations/kelowna/overview/', '250-860-7900'),
		(9, 5, 5, 'Prestige Oceanfront Resort', "Sooke@PrestigeHotels.ca", "6929 West Coast Road Sooke, BC  V9Z 0V1", 'https://www.prestigehotelsandresorts.com/locations/sooke/overview/', '250-642-0805'),
		(10, 5, 5, 'Prestige Hotel Vernon', "Vernon@PrestigeHotels.ca", "Vernon, BC V1T 9G8", 'https://www.prestigehotelsandresorts.com/locations/vernon/overview/', '250-558-5991');


INSERT INTO ROOMS (`room_id`, `room_type_room_type_id`, `hotels_hotel_id`)
	VALUES
		(1, 1, 1),
		(2, 2, 1),
		(3, 3, 1),
		(4, 4, 1),
		(5, 1, 2),
		(6, 2, 2),
		(7, 3, 2),
		(8, 4, 2),
		(9, 1, 3),
		(10, 2, 3),
		(11, 3, 3),
		(12, 4, 3),
		(13, 1, 4),
		(14, 2, 4),
		(15, 3, 4),
		(16, 4, 4),
		(17, 1, 5),
		(18, 2, 5),
		(19, 3, 5),
		(20, 4, 5),
		(21, 1, 6),
		(22, 2, 6),
		(23, 3, 6),
		(24, 4, 6),
		(25, 1, 7),
		(26, 2, 7),
		(27, 3, 7),
		(28, 4, 7),
		(29, 1, 8),
		(30, 2, 8),
		(31, 3, 8),
		(32, 4, 8),
		(33, 1, 9),
		(34, 2, 9),
		(35, 3, 9),
		(36, 4, 9),
		(37, 1, 10),
		(38, 2, 10),
		(39, 3, 10),
		(40, 4, 10);
		
		
INSERT INTO BOOKINGS (`booking_id`, `booking_date`, `duration_of_stay`, `check_in_date`, `check_out_date`, `booking_payment_type`, `total_rooms_booked`, `rooms_room_id`, `guests_guest_id`)
	VALUES
		(101, '2020-01-08 00:00:00', 5, '2020-01-10 12:00:00', '2020-01-15 23:00:00', 'card', 1, 3, 4 ),
		(102, '2020-01-01 00:00:00', 2, '2020-01-01 12:00:00', '2020-01-03 23:00:00', 'card', 1, 20, 1 ),
		(103, '2020-01-15 00:00:00', 7, '2020-01-20 12:00:00', '2020-01-27 23:00:00', 'card', 1, 5, 2 ),
		(104, '2020-02-02 00:00:00', 4, '2020-02-05 12:00:00', '2020-02-09 23:00:00', 'card', 2, 1, 3 ),
		(105, '2020-02-05 00:00:00', 10, '2020-02-08 12:00:00', '2020-02-18 23:00:00', 'card', 1, 14, 5 ),
		(106, '2020-02-10 00:00:00', 2, '2020-02-12 12:00:00', '2020-02-14 23:00:00', 'card', 3, 10, 4 ),
		(107, '2020-02-18 00:00:00', 5, '2020-02-20 12:00:00', '2020-02-25 23:00:00', 'card', 1, 40, 2 ),
		(108, '2020-02-25 00:00:00', 14, '2020-03-01 12:00:00', '2020-03-15 23:00:00', 'card', 1, 15, 1 ),
		(109, '2020-03-02 00:00:00', 2, '2020-03-10 12:00:00', '2020-03-12 23:00:00', 'card', 1, 28, 3 ),
		(110, '2020-03-15 00:00:00', 4, '2020-03-20 12:00:00', '2020-03-24 23:00:00', 'card', 1, 37, 2 ),
		(111, '2020-03-18 00:00:00', 1, '2020-03-18 12:00:00', '2020-03-19 23:00:00', 'cash', 1, 24, 5 ),
		(112, '2020-03-20 00:00:00', 12, '2020-03-25 12:00:00', '2020-04-06 23:00:00', 'card', 1, 28, 3 ),
		(113, '2020-04-05 00:00:00', 6, '2020-04-07 12:00:00', '2020-04-13 23:00:00', 'cash', 1, 9, 4 ),
		(114, '2020-04-15 00:00:00', 4, '2020-04-15 12:00:00', '2020-04-19 23:00:00', 'cash', 1, 10, 2 ),
		(115, '2020-04-15 00:00:00', 5, '2020-04-20 12:00:00', '2020-04-25 23:00:00', 'card', 3, 30, 1 ),
		(116, '2020-04-20 00:00:00', 2, '2020-04-25 12:00:00', '2020-04-27 23:00:00', 'card', 1, 36, 5 ),
		(117, '2020-05-01 00:00:00', 7, '2020-05-07 12:00:00', '2020-05-14 23:00:00', 'card', 1, 7, 3 ),
		(118, '2020-05-08 00:00:00', 3, '2020-05-15 12:00:00', '2020-05-18 23:00:00', 'card', 1, 38, 2 ),
		(119, '2020-06-01 00:00:00', 5, '2020-06-05 12:00:00', '2020-06-10 23:00:00', 'card', 4, 25, 5 ),
		(120, '2020-06-15 00:00:00', 2, '2020-06-17 12:00:00', '2020-06-19 23:00:00', 'card', 2, 6, 1 ),
		(121, '2020-07-02 00:00:00', 8, '2020-07-04 12:00:00', '2020-07-12 23:00:00', 'card', 1, 16, 3 ),
		(122, '2020-08-01 00:00:00', 10, '2020-08-08 12:00:00', '2020-08-18 23:00:00', 'card', 1, 9, 4 );
		
		