-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2018 at 01:19 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbv_purchase_order_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'cotton'),
(2, 'silk'),
(3, 'wollen');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_challan`
--

CREATE TABLE `delivery_challan` (
  `dc_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `dc_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_challan`
--

INSERT INTO `delivery_challan` (`dc_id`, `po_id`, `dc_date`) VALUES
(1, 1, '2018-09-21'),
(2, 2, '2019-08-08'),
(3, 4, '2018-10-23'),
(4, 1, '2018-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_challan_product`
--

CREATE TABLE `delivery_challan_product` (
  `dc_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` double NOT NULL,
  `uom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_challan_product`
--

INSERT INTO `delivery_challan_product` (`dc_id`, `product_id`, `qty`, `uom`) VALUES
(2, 1, 200, 'piece'),
(2, 2, 300, 'piece'),
(2, 3, 400, 'piece'),
(3, 1, 12, 'piece'),
(3, 2, 134, 'piece'),
(3, 3, 4567, 'piece'),
(4, 1, 900, 'piece'),
(4, 2, 900, 'piece'),
(4, 3, 900, 'piece');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `enquiry_date`) VALUES
(1, '2018-09-20'),
(2, '2018-09-22'),
(3, '2018-09-23'),
(4, '2018-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_product`
--

CREATE TABLE `enquiry_product` (
  `enquiry_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry_product`
--

INSERT INTO `enquiry_product` (`enquiry_id`, `product_id`, `qty`) VALUES
(2, 1, 12),
(2, 2, 13),
(2, 3, 14),
(3, 1, 234),
(3, 2, 567),
(3, 3, 890),
(3, 1, 234),
(3, 2, 567),
(3, 3, 890),
(4, 1, 231),
(4, 2, 890),
(4, 3, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(15) NOT NULL,
  `invoice_date` date NOT NULL,
  `dc_id` int(15) NOT NULL,
  `dc_date` date NOT NULL,
  `po_id` int(15) NOT NULL,
  `po_date` date NOT NULL,
  `vendor_id` int(15) NOT NULL,
  `credit_period` int(15) NOT NULL,
  `total_invoice_amount` double NOT NULL,
  `total_paid_amount` double NOT NULL,
  `total_outstanding_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_date`, `dc_id`, `dc_date`, `po_id`, `po_date`, `vendor_id`, `credit_period`, `total_invoice_amount`, `total_paid_amount`, `total_outstanding_amount`) VALUES
(1, '2019-09-09', 1, '2021-09-09', 1, '2109-08-08', 1, 2, 2233, 2000, 233),
(2, '2018-09-09', 2, '2018-10-09', 1, '2018-08-09', 1, 4, 12000, 12000, 0),
(3, '2018-07-07', 3, '2018-06-06', 3, '2018-05-05', 2, 4, 23456, 23450, 6),
(4, '2018-01-22', 4, '2018-02-22', 4, '2018-03-22', 3, 8, 20000, 12000, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_product`
--

CREATE TABLE `invoice_product` (
  `invoice_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `qty` double NOT NULL,
  `uom` varchar(20) NOT NULL,
  `rate` double NOT NULL,
  `amount` double NOT NULL,
  `gst` double NOT NULL,
  `gst_amount` double NOT NULL,
  `total_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice_product`
--

INSERT INTO `invoice_product` (`invoice_id`, `product_id`, `qty`, `uom`, `rate`, `amount`, `gst`, `gst_amount`, `total_amount`) VALUES
(2, 1, 12, 'piece', 1, 12, 1, 1, 13),
(2, 2, 12, 'piece', 1, 12, 1, 1, 13),
(2, 3, 12, 'piece', 0, 12, 1, 1, 13),
(3, 1, 100, 'piece', 12, 1200, 12, 144, 12144),
(3, 2, 100, 'piece', 12, 1200, 12, 144, 13144),
(3, 3, 200, 'piece', 0, 2400, 12, 1242, 3246),
(4, 1, 100, 'piece', 10, 1000, 10, 10, 1010),
(4, 2, 500, 'piece', 10, 5000, 10, 50, 5050),
(4, 3, 600, 'piece', 0, 6000, 10, 60, 6060);

-- --------------------------------------------------------

--
-- Table structure for table `material_rejection_note`
--

CREATE TABLE `material_rejection_note` (
  `mrn_id` int(11) NOT NULL,
  `mrn_date` date NOT NULL,
  `dc_id` int(11) NOT NULL,
  `dc_date` date NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material_rejection_note`
--

INSERT INTO `material_rejection_note` (`mrn_id`, `mrn_date`, `dc_id`, `dc_date`, `vendor_id`) VALUES
(1, '2019-09-09', 2, '2019-10-09', 2),
(2, '2019-08-08', 2, '2019-09-08', 3),
(3, '2019-08-09', 4, '2019-07-07', 5),
(4, '2018-10-10', 3, '2018-11-10', 6),
(5, '2018-12-31', 4, '2018-11-30', 2),
(6, '2018-06-06', 2, '2018-05-05', 6),
(7, '2018-01-01', 1, '2017-12-31', 4),
(8, '2018-09-09', 3, '2019-10-10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `material_rejection_note_product`
--

CREATE TABLE `material_rejection_note_product` (
  `mrn_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty_delivered` double NOT NULL,
  `qty_accepted` double NOT NULL,
  `qty_rejected` double NOT NULL,
  `uom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material_rejection_note_product`
--

INSERT INTO `material_rejection_note_product` (`mrn_id`, `product_id`, `qty_delivered`, `qty_accepted`, `qty_rejected`, `uom`) VALUES
(1, 1, 10, 10, 0, 'piece'),
(1, 2, 10, 10, 0, 'piece'),
(1, 3, 10, 10, 0, 'piece'),
(2, 1, 100, 50, 50, 'piece'),
(2, 2, 200, 100, 100, 'piece'),
(2, 3, 300, 150, 150, 'piece'),
(3, 1, 238, 200, 38, 'piece'),
(3, 2, 789, 700, 89, 'piece'),
(3, 3, 456, 400, 56, 'piece'),
(4, 1, 9000, 1000, 8000, 'piece'),
(4, 2, 5000, 4000, 1000, 'piece'),
(4, 3, 4567, 567, 4000, 'piece'),
(5, 1, 1234, 1000, 234, 'piece'),
(5, 2, 1234, 1000, 234, 'piece'),
(5, 3, 1234, 1000, 234, 'piece'),
(6, 1, 877, 800, 77, 'piece'),
(6, 2, 899, 99, 800, 'piece'),
(6, 3, 866, 66, 800, 'piece'),
(7, 1, 455, 455, 0, 'piece'),
(7, 2, 700, 700, 0, 'piece'),
(7, 3, 12340, 10000, 2340, 'piece'),
(8, 1, 12, 2, 10, 'piece'),
(8, 2, 13, 10, 3, 'piece'),
(8, 3, 14, 11, 3, 'piece');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `mode_of_payment` varchar(20) NOT NULL,
  `total_amount` double NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `cheque_number` int(11) NOT NULL,
  `cheque_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_date`, `vendor_id`, `invoice_id`, `po_id`, `mode_of_payment`, `total_amount`, `bank_name`, `cheque_number`, `cheque_date`) VALUES
(1, '2018-09-09', 1, 1, 1, 'cash', 5000, '', 0, '0000-00-00'),
(2, '2019-09-09', 2, 1, 1, 'cheque', 509887, 'Axis', 12345, '2018-10-09'),
(3, '2018-10-15', 1, 3, 2, 'cash', 3400, '', 0, '0000-00-00'),
(4, '2018-10-10', 2, 3, 1, 'cheque', 34568, 'SBI', 14568, '2018-09-09'),
(5, '2018-10-09', 3, 4, 4, 'cash', 2300, '', 0, '0000-00-00'),
(6, '2018-12-23', 2, 4, 4, 'cheque', 200000, 'ICICI', 66767820, '2019-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `uom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `subcat_id`, `cat_id`, `product_name`, `uom`) VALUES
(1, 1, 1, 'v neck', 'piece'),
(2, 3, 2, 'high waist', 'piece'),
(3, 2, 1, 'collared', 'piece');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_id` int(15) NOT NULL,
  `po_date` date NOT NULL,
  `q_id` int(15) NOT NULL,
  `q_date` date NOT NULL,
  `vendor_id` int(15) NOT NULL,
  `credit_period` int(15) NOT NULL,
  `total_amount` double NOT NULL,
  `delivery_period` int(15) NOT NULL,
  `insurance_by` varchar(20) NOT NULL,
  `transport_mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_id`, `po_date`, `q_id`, `q_date`, `vendor_id`, `credit_period`, `total_amount`, `delivery_period`, `insurance_by`, `transport_mode`) VALUES
(1, '2018-09-20', 1, '2019-07-07', 1, 4, 1234, 4, 'Nitin', 'air'),
(2, '2018-10-23', 2, '2018-10-22', 1, 3, 1200, 3, 'Sanjana', 'Rail'),
(3, '2018-11-22', 3, '2018-10-22', 2, 4, 1300, 4, 'Ashish', 'Air'),
(4, '2018-11-22', 4, '2018-10-22', 3, 4, 1300, 4, 'Ashish', 'Air');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_product`
--

CREATE TABLE `purchase_order_product` (
  `po_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `qty` double NOT NULL,
  `uom` varchar(20) NOT NULL,
  `rate` double NOT NULL,
  `amount` double NOT NULL,
  `gst` double NOT NULL,
  `gst_amount` double NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order_product`
--

INSERT INTO `purchase_order_product` (`po_id`, `product_id`, `qty`, `uom`, `rate`, `amount`, `gst`, `gst_amount`, `delivery_date`) VALUES
(2, 1, 100, 'piece', 1, 100, 1, 1, '0000-00-00'),
(2, 2, 200, 'piece', 0, 400, 1, 2, '0000-00-00'),
(2, 3, 300, 'piece', 0, 900, 1, 3, '0000-00-00'),
(3, 1, 1, 'piece', 1, 1, 1, 1, '0000-00-00'),
(3, 2, 2, 'piece', 0, 4, 1, 1, '0000-00-00'),
(3, 3, 3, 'piece', 0, 9, 1, 1, '0000-00-00'),
(4, 1, 1, 'piece', 1, 1, 1, 1, '2018-10-22'),
(4, 2, 2, 'piece', 0, 4, 1, 1, '2018-10-26'),
(4, 3, 3, 'piece', 0, 9, 1, 1, '2018-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requistion`
--

CREATE TABLE `purchase_requistion` (
  `pr_id` int(15) NOT NULL,
  `pr_date` date NOT NULL,
  `store_person_name` varchar(20) NOT NULL,
  `pr_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_requistion`
--

INSERT INTO `purchase_requistion` (`pr_id`, `pr_date`, `store_person_name`, `pr_status`) VALUES
(1, '2018-09-21', 'Sanjana', 'open'),
(2, '2018-09-22', 'Ashish', 'closed'),
(3, '2018-09-23', 'Nitin', 'closed'),
(5, '2018-10-11', 'Mitanshu', 'open'),
(6, '2018-09-09', 'Mrinal', 'open'),
(67, '2018-09-22', 'Sahil', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requistion_product`
--

CREATE TABLE `purchase_requistion_product` (
  `pr_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `qty` double NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_requistion_product`
--

INSERT INTO `purchase_requistion_product` (`pr_id`, `product_id`, `qty`, `delivery_date`) VALUES
(1, 1, 200, '2018-10-21'),
(1, 2, 300, '2018-10-21'),
(1, 3, 400, '2018-10-21'),
(2, 1, 450, '2018-10-22'),
(2, 2, 670, '2018-10-22'),
(2, 3, 456, '2018-10-22'),
(3, 1, 234, '2018-10-23'),
(3, 2, 345, '2018-10-23'),
(3, 3, 456, '2018-10-23'),
(5, 1, 123, '2019-09-09'),
(5, 2, 345, '2018-09-10'),
(5, 3, 300, '2018-10-10'),
(6, 1, 12, '2018-01-09'),
(6, 2, 13, '2018-09-08'),
(6, 3, 13, '2018-07-09'),
(67, 1, 200, '2018-10-22'),
(67, 2, 456, '2018-11-22'),
(67, 3, 567, '2018-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `q_id` int(15) NOT NULL,
  `enquiry_id` int(15) NOT NULL,
  `vendor_id` int(15) NOT NULL,
  `q_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`q_id`, `enquiry_id`, `vendor_id`, `q_date`) VALUES
(1, 1, 1, '2019-08-08'),
(2, 2, 1, '2019-12-04'),
(3, 3, 2, '2018-09-22'),
(4, 4, 3, '2018-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_product`
--

CREATE TABLE `quotation_product` (
  `q_id` int(15) NOT NULL,
  `product_id` int(15) DEFAULT NULL,
  `qty` double NOT NULL,
  `rate` double NOT NULL,
  `uom` varchar(20) NOT NULL,
  `gst` double NOT NULL,
  `gst_amount` double NOT NULL,
  `total_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotation_product`
--

INSERT INTO `quotation_product` (`q_id`, `product_id`, `qty`, `rate`, `uom`, `gst`, `gst_amount`, `total_amount`) VALUES
(2, 1, 100, 1, 'piece', 12, 12, 112),
(2, 2, 200, 1, 'piece', 12, 24, 224),
(2, 3, 300, 1, 'piece', 12, 36, 336),
(3, 1, 10, 1, 'piece', 12, 1.2, 11.2),
(3, 2, 20, 1, 'piece', 13, 1.3, 21.3),
(3, 3, 30, 1, 'piece', 14, 1.4, 31.4),
(4, 1, 100, 2, 'piece', 12, 24, 224),
(4, 2, 200, 2, 'piece', 12, 48, 448),
(4, 3, 300, 2, 'piece', 12, 72, 672);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`) VALUES
(1, 'shirt'),
(2, 'tshirt'),
(3, 'trouser');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(0, 'admin', 'admin'),
(1, 'mitanshu', 'mitanshu'),
(2, 'Ashish', 'Ashish'),
(3, 'Sanj', 'Sanj'),
(4, 'ashishshah', 'ashishshah'),
(5, 'Ashish Shah', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `address`, `phone_no`) VALUES
(1, 'Ashish', 'Pune', 20384857),
(2, 'Nitin', 'Gaziabad', 20345756),
(3, 'Mitanshu', 'Delhi', 20948576),
(4, 'Mrinal', 'New Delhi', 2087346),
(5, 'Joe', 'Mumbai', 42938293),
(6, 'Ashutosh', 'Noida', 2902836),
(7, 'Priya', 'Indore', 3848475);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `delivery_challan`
--
ALTER TABLE `delivery_challan`
  ADD PRIMARY KEY (`dc_id`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `delivery_challan_product`
--
ALTER TABLE `delivery_challan_product`
  ADD KEY `dc_id` (`dc_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `enquiry_product`
--
ALTER TABLE `enquiry_product`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `enquiry_id` (`enquiry_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `dc_id` (`dc_id`),
  ADD KEY `po_id` (`po_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `invoice_product`
--
ALTER TABLE `invoice_product`
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `material_rejection_note`
--
ALTER TABLE `material_rejection_note`
  ADD PRIMARY KEY (`mrn_id`),
  ADD KEY `dc_id` (`dc_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `material_rejection_note_product`
--
ALTER TABLE `material_rejection_note_product`
  ADD KEY `mrn_id` (`mrn_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `vendor_id` (`vendor_id`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `po_id` (`po_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `q_id` (`q_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `purchase_order_product`
--
ALTER TABLE `purchase_order_product`
  ADD KEY `po_id` (`po_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `purchase_requistion`
--
ALTER TABLE `purchase_requistion`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `purchase_requistion_product`
--
ALTER TABLE `purchase_requistion_product`
  ADD KEY `pr_id` (`pr_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `enquiry_id` (`enquiry_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `quotation_product`
--
ALTER TABLE `quotation_product`
  ADD KEY `q_id` (`q_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Constraints for dumped tables
--
--
-- Constraints for table `delivery_challan`
--
ALTER TABLE `delivery_challan`
  ADD CONSTRAINT `delivery_challan_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`po_id`);

--
-- Constraints for table `delivery_challan_product`
--
ALTER TABLE `delivery_challan_product`
  ADD CONSTRAINT `delivery_challan_product_ibfk_1` FOREIGN KEY (`dc_id`) REFERENCES `delivery_challan` (`dc_id`),
  ADD CONSTRAINT `delivery_challan_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `enquiry_product`
--
ALTER TABLE `enquiry_product`
  ADD CONSTRAINT `enquiry_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `enquiry_product_ibfk_2` FOREIGN KEY (`enquiry_id`) REFERENCES `enquiry` (`enquiry_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`dc_id`) REFERENCES `delivery_challan` (`dc_id`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`po_id`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`);

--
-- Constraints for table `invoice_product`
--
ALTER TABLE `invoice_product`
  ADD CONSTRAINT `invoice_product_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`),
  ADD CONSTRAINT `invoice_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `material_rejection_note`
--
ALTER TABLE `material_rejection_note`
  ADD CONSTRAINT `material_rejection_note_ibfk_1` FOREIGN KEY (`dc_id`) REFERENCES `delivery_challan` (`dc_id`),
  ADD CONSTRAINT `material_rejection_note_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`);

--
-- Constraints for table `material_rejection_note_product`
--
ALTER TABLE `material_rejection_note_product`
  ADD CONSTRAINT `material_rejection_note_product_ibfk_1` FOREIGN KEY (`mrn_id`) REFERENCES `material_rejection_note` (`mrn_id`),
  ADD CONSTRAINT `material_rejection_note_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`po_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`subcat_id`) REFERENCES `subcategory` (`subcat_id`);

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `quotation` (`q_id`),
  ADD CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`);

--
-- Constraints for table `purchase_order_product`
--
ALTER TABLE `purchase_order_product`
  ADD CONSTRAINT `purchase_order_product_ibfk_1` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`po_id`),
  ADD CONSTRAINT `purchase_order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `purchase_requistion_product`
--
ALTER TABLE `purchase_requistion_product`
  ADD CONSTRAINT `purchase_requistion_product_ibfk_1` FOREIGN KEY (`pr_id`) REFERENCES `purchase_requistion` (`pr_id`),
  ADD CONSTRAINT `purchase_requistion_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `quotation_ibfk_1` FOREIGN KEY (`enquiry_id`) REFERENCES `enquiry` (`enquiry_id`),
  ADD CONSTRAINT `quotation_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`);

--
-- Constraints for table `quotation_product`
--
ALTER TABLE `quotation_product`
  ADD CONSTRAINT `quotation_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `quotation_product_ibfk_2` FOREIGN KEY (`q_id`) REFERENCES `quotation` (`q_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
