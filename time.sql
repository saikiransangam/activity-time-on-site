CREATE TABLE `tos` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `tos_id` bigint(20) DEFAULT NULL,
 `tos_session_key` varchar(50) DEFAULT NULL,
 `tos_user_id` varchar(1000) DEFAULT NULL,
 `url` varchar(10000) DEFAULT NULL,
 `title` varchar(5000) DEFAULT NULL,
 `entry_time` datetime(3) DEFAULT NULL,
 `exit_time` datetime(3) DEFAULT NULL,
 `timeonpage` int(11) DEFAULT NULL,
 `timeonpage_by_duration` varchar(20) DEFAULT NULL,
 `timeonpage_tracked_by` varchar(15) DEFAULT NULL,
 `timeonsite` int(11) DEFAULT NULL,
 `timeonsite_by_duration` varchar(20) DEFAULT NULL,
 `tracking_type` varchar(15) DEFAULT NULL,
 PRIMARY KEY (`id`)
) CHARACTER SET utf8 COLLATE utf8_general_ci
