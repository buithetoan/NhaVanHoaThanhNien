-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2020 lúc 10:50 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhathanhniendb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activities`
--

INSERT INTO `activities` (`id`, `name`, `image`, `title`, `content`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Sôi nổi các hoạt động ra quân Tháng Thanh niên năm 2020', 'hd1.jpg', 'Sôi nổi các hoạt động ra quân Tháng Thanh niên năm 2020', '<p>Ngay từ những ng&agrave;y đầu th&aacute;ng 3, nhiều tỉnh, th&agrave;nh đo&agrave;n trong cả nước tổ chức ra qu&acirc;n Th&aacute;ng thanh ni&ecirc;n năm 2020 với nhiều hoạt động an sinh x&atilde; hội &yacute; nghĩa trong bối cảnh dịch bệnh COVID-19 diễn biến phức tạp.</p>\r\n\r\n<p>Trước t&igrave;nh h&igrave;nh dịch bệnh COVID-19 đang c&oacute; diễn biến phức tạp, Ban B&iacute; thư Trung ương Đo&agrave;n kh&ocirc;ng tổ chức lễ ra qu&acirc;n cấp to&agrave;n quốc v&agrave;&nbsp;đề nghị Ban thường vụ c&aacute;c tỉnh, th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc kh&ocirc;ng tổ chức lễ ra qu&acirc;n, lễ khởi động Th&aacute;ng Thanh ni&ecirc;n c&oacute; tụ tập đ&ocirc;ng người, m&agrave; ch&uacute; trọng&nbsp;triển khai c&aacute;c hoạt động cụ thể, thiết thực ph&ugrave; hợp với t&igrave;nh h&igrave;nh địa phương v&agrave; thực hiện tuy&ecirc;n truyền về kết quả hoạt động, những đổi mới về&nbsp;phương thức tổ chức, triển khai c&aacute;c hoạt động trong bối cảnh dịch bệnh COVID-19.</p>\r\n\r\n<p><img alt=\"\" src=\"https://nhandan.com.vn/cdn/vn/images/2020/anhngoc/03/03.jpg\" width=\"600\" /></p>\r\n\r\n<p>C&aacute;c đội h&igrave;nh t&igrave;nh nguyện đến từng nh&agrave; để tuy&ecirc;n truyền ngăn chặn dịch bệnh Covid-19.</p>\r\n\r\n<p>Theo đ&oacute;, Ban b&iacute; thư Trung ương Đo&agrave;n đề nghị Ban thường vụ c&aacute;c tỉnh, th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc tiếp tục đẩy mạnh tuy&ecirc;n truyền đến đ&ocirc;ng đảo đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n v&agrave; nh&acirc;n d&acirc;n về diễn biến của dịch bệnh COVID-19 g&acirc;y ra, c&aacute;c biện ph&aacute;p ph&ograve;ng, chống dịch bệnh tại cộng đồng th&ocirc;ng qua hệ thống b&aacute;o ch&iacute; truyền th&ocirc;ng của Đo&agrave;n v&agrave; qua c&aacute;c trang mạng x&atilde; hội.&nbsp;Hạn chế tổ chức c&aacute;c hoạt động tập trung đ&ocirc;ng người trong thời điểm dịch bệnh COVID-19 đang diễn biến phức tạp như hiện nay. C&aacute;c hoạt động tổ chức tại địa phương, đơn vị đảm bảo theo chỉ đạo của cấp ủy, ch&iacute;nh quyền địa phương, đơn vị.</p>\r\n\r\n<p>Trong hai ng&agrave;y vừa qua, c&aacute;c tỉnh th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc đ&atilde; tổ chức khởi động Th&aacute;ng thanh ni&ecirc;n bằng nhiều h&igrave;nh thức kh&aacute;c nhau ti&ecirc;u biểu như:&nbsp;<em><strong>Th&agrave;nh đo&agrave;n H&agrave; Nội</strong></em>&nbsp;tổ chức khởi động Th&aacute;ng thanh ni&ecirc;n bằng h&igrave;nh thức ph&aacute;t trực tiếp tr&ecirc;n Fanpage của Th&agrave;nh đo&agrave;n H&agrave; Nội v&agrave; 100% c&aacute;c cơ sở Đo&agrave;n trực thuộc theo d&otilde;i v&agrave; chia sẻ tr&ecirc;n fanpage của đơn vị.&nbsp;Đ&acirc;y l&agrave; h&igrave;nh thức s&aacute;ng tạo khởi động Th&aacute;ng Thanh ni&ecirc;n nhằm thực hiện chỉ đạo của Ban B&iacute; thư Trung ương Đo&agrave;n trong bối cảnh dịch Covid-19 đang c&oacute; diễn biến phức tạp, tr&aacute;nh tập trung đ&ocirc;ng người.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132277078177955058_HN.jpg\" width=\"600\" /></p>\r\n\r\n<p>Dọn vệ sinh m&ocirc;i trường gắn với chương tr&igrave;nh &ldquo;Ng&agrave;y Chủ nhật xanh&rdquo; của Quận đo&agrave;n Long Bi&ecirc;n.</p>\r\n\r\n<p><em><strong>Tại Y&ecirc;n B&aacute;i,</strong></em>&nbsp;Ban Thường vụ Tỉnh đo&agrave;n kh&ocirc;ng tổ chức phần Lễ m&agrave; tập chung v&agrave;o thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc thanh ni&ecirc;n cụ thể, thiết thực phục vụ người d&acirc;n,&nbsp;như: tư vấn sức khỏe, kh&aacute;m chữa bệnh, cấp thuốc, tặng qu&agrave; cho người ngh&egrave;o v&agrave; đối tượng ch&iacute;nh s&aacute;ch; hỗ trợ thiếu nhi c&oacute; ho&agrave;n cảnh kh&oacute; khăn; tổ chức hiến m&aacute;u t&igrave;nh nguyện; tổ chức c&aacute;c hoạt động th&uacute;c đẩy tinh thần s&aacute;ng tạo, nghi&ecirc;n cứu khoa học của thanh ni&ecirc;n; triển khai Đề &aacute;n Đề &aacute;n &ldquo;Hỗ trợ, ph&aacute;t triển phong tr&agrave;o thanh ni&ecirc;n Y&ecirc;n B&aacute;i khởi nghiệp giai đoạn 2019&nbsp; - 2020 v&agrave; Đề &aacute;n &ldquo;Tư vấn hướng nghiệp, giới thiệu việc l&agrave;m cho thanh thiếu ni&ecirc;n giai đoạn 2018 - 2022&rdquo;...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://baoyenbai.com.vn/Includes/NewsDetail/3_2020/dt_1320201452_ho-tro.jpg\" width=\"600\" /></p>\r\n\r\n<p>Tuổi trẻ Y&ecirc;n B&aacute;i trao biển hỗ trợ tặng 30 tấn xi măng cho x&atilde; Minh Xu&acirc;n, huyện Lục Y&ecirc;n.</p>\r\n\r\n<p>C&ugrave;ng đ&oacute;, c&aacute;c tỉnh, th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc đ&atilde; chủ động điều chỉnh nội dung v&agrave; phương thức hoạt động của c&aacute;c cấp bộ Đo&agrave;n trong Th&aacute;ng Thanh ni&ecirc;n 2020 ph&ugrave; hợp với t&igrave;nh h&igrave;nh dịch bệnh COVID-19; tập trung triển khai c&aacute;c c&ocirc;ng việc cụ thể theo 7 nội dung trọng t&acirc;m Kế hoạch số 225-KH/TWĐTN-TNNT ng&agrave;y 13/02/2020 của Ban B&iacute; thư Trung ương Đo&agrave;n về Th&aacute;ng Thanh ni&ecirc;n năm 2020. Trong đ&oacute;, ch&uacute; &yacute; triển khai c&aacute;c tuyến c&ocirc;ng việc về c&ocirc;ng t&aacute;c ph&ograve;ng chống dịch COVID-19 theo c&ocirc;ng văn số 4179-CV/TWĐTN-VP ng&agrave;y 28/01/2020 của Ban B&iacute; thư Trung ương Đo&agrave;n.</p>\r\n\r\n<p>Để đảm bảo&nbsp;c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch, ĐVTN được&nbsp;y&ecirc;u cầu đeo khẩu trang, sử dụng nước s&aacute;t khuẩn tay trước, trong v&agrave; sau qu&aacute; tr&igrave;nh tham gia hoạt động; tiếp tục tổ chức c&aacute;c hoạt động hỗ trợ nh&acirc;n d&acirc;n ph&ograve;ng chống dịch bệnh COVID-19 v&agrave; c&aacute;c biện ph&aacute;p ph&ograve;ng chống dịch bệnh tại cộng đồng. Nếu ph&aacute;t hiện c&aacute;c trường hợp nghi ngờ mắc bệnh phải kịp thời th&ocirc;ng b&aacute;o với c&aacute;c cơ quan chức năng v&agrave;&nbsp;c&oacute; c&aacute;c phương &aacute;n đ&aacute;p ứng hiệu quả với t&igrave;nh dịch bệnh.</p>\r\n\r\n<p><strong>Một số kết quả những ng&agrave;y đầu th&aacute;ng thanh ni&ecirc;n 2020:</strong></p>\r\n\r\n<p><em><strong>Th&agrave;nh Đo&agrave;n TP Hồ Ch&iacute; Minh&nbsp;</strong></em>triển khai 05&nbsp;c&ocirc;ng tr&igrave;nh cấp th&agrave;nh phố, trong đ&oacute; c&oacute; nhiều c&ocirc;ng tr&igrave;nh hướng đến c&ocirc;ng t&aacute;c c&ugrave;ng th&agrave;nh phố chung tay dập dịch Covid-19. Cụ thể, tổ chức vệ sinh, cải tạo cảnh quan, phun thuốc khử m&ugrave;i v&agrave; chống sốt xuất huyết tại tuyến k&ecirc;nh Tham Lương - Rạch Nước L&ecirc;n (cầu Bến Lội); tuy&ecirc;n truyền v&agrave; hướng dẫn thanh ni&ecirc;n c&ocirc;ng nh&acirc;n ph&ograve;ng, chống dịch Covid-19 cho 400 hộ d&acirc;n; phun khử khuẩn khu nh&agrave; trọ, tặng x&agrave; b&ocirc;ng rửa tay v&agrave; khẩu trang y tế cho thanh ni&ecirc;n, c&ocirc;ng nh&acirc;n; lắp đặt b&igrave;nh dung dịch rửa tay, vệ sinh khử khuẩn tại 18 tầng của chung cư L&ecirc; Th&agrave;nh (phường Trị Đ&ocirc;ng A, quận B&igrave;nh T&acirc;n).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.thanhdoan.hochiminhcity.gov.vn/ThanhDoan/webtd/Content/news/2020/3/33223/53c276dd1496efc8b687.jpg\" width=\"600\" /></p>\r\n\r\n<p>Tổ chức vệ sinh, cải tạo cảnh quan, phun thuốc khử m&ugrave;i v&agrave; chống sốt xuất huyết tại tuyến k&ecirc;nh Tham Lương - Rạch Nước L&ecirc;n (cầu Bến Lội)</p>\r\n\r\n<p><em><strong>Tại Đồng Th&aacute;p,</strong></em>&nbsp;anh Nguyễn Văn Vũ Minh, B&iacute; thư Tỉnh Đo&agrave;n cho biết, trước diễn biến phức tạp của dịch Covid - 19 n&ecirc;n c&aacute;c cấp đo&agrave;n kh&ocirc;ng tổ chức lễ ra qu&acirc;n như mọi năm m&agrave; tập trung triển khai c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc ph&ugrave; hợp với t&igrave;nh h&igrave;nh thực tế, nhất l&agrave; tập trung tuy&ecirc;n truyền s&acirc;u rộng gi&uacute;p người d&acirc;n hiểu r&otilde; hơn để ph&ograve;ng chống dịch một c&aacute;ch tốt nhất. Sau ph&aacute;t động, nhiều bạn ĐVTN tuy&ecirc;n truyền c&aacute;c biện ph&aacute;p ph&ograve;ng dịch Covid - 19, ph&aacute;t khẩu trang, x&agrave; b&ocirc;ng miễn ph&iacute; cho người d&acirc;n x&atilde; T&acirc;n Thuận T&acirc;y, b&agrave;n giao c&ocirc;ng tr&igrave;nh bồn nước rửa tay d&agrave;nh cho học sinh trường THCS Phan Bội Ch&acirc;u. Ngo&agrave;i ra, Tỉnh đo&agrave;n c&ograve;n trao 700 triệu đồng vốn vay khởi nghiệp cho 6 dự &aacute;n của thanh ni&ecirc;n.</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132276089113013384_2.jpg\" width=\"600\" /></p>\r\n\r\n<p>Trao tặng bồn rửa tay cho trường học</p>\r\n\r\n<p><em><strong>Tại Quảng Trị:</strong></em>&nbsp;tỉnh Đo&agrave;n đ&atilde; chỉ đạo 100% c&aacute;c cấp bộ Đo&agrave;n trong to&agrave;n tỉnh đồng loạt ra qu&acirc;n &ldquo;Ng&agrave;y Chủ nhật xanh&rdquo; lần thứ&nbsp;nhất, năm 2020 v&agrave; tổ chức c&aacute;c hoạt động ph&ograve;ng chống dịch Covid - 19.</p>\r\n\r\n<p>Đợt ra qu&acirc;n &ldquo;Ng&agrave;y Chủ nhật xanh&rdquo; lần n&agrave;y được c&aacute;c cấp bộ Đo&agrave;n lựa chọn nhiều c&ocirc;ng tr&igrave;nh, phần việc cụ thể, thiết thực như: Tổ chức ra qu&acirc;n thực hiện vệ sinh m&ocirc;i trường, thu gom, ph&acirc;n loại, xử l&yacute; r&aacute;c thải, t&aacute;i chế r&aacute;c thải th&agrave;nh vật dụng th&acirc;n thiện với m&ocirc;i trường; vệ sinh c&aacute;c tuyến đường thanh ni&ecirc;n tự quản; b&oacute;c gỡ c&aacute;c biển quảng c&aacute;o rao vặt tr&aacute;i ph&eacute;p; vệ sinh c&aacute;c Nghĩa trang liệt sỹ, di t&iacute;ch lịch sử; trồng c&acirc;y xanh; tuy&ecirc;n truyền, n&acirc;ng cao nhận thức của c&aacute;c tầng lớp nh&acirc;n d&acirc;n về t&aacute;c hại của r&aacute;c thải nhựa, hạn chế sử dụng c&aacute;c sản phẩm nhựa d&ugrave;ng 1 lần, t&uacute;i nilon, ph&acirc;n loại r&aacute;c thải, đổ r&aacute;c đ&uacute;ng nơi quy định, thay thế t&uacute;i nilon bằng c&aacute;c loại sản phẩm th&acirc;n thiện với m&ocirc;i trường; tuy&ecirc;n truyền ph&ograve;ng, chống dịch Covid -19.</p>\r\n\r\n<p><em><strong>Tại&nbsp;Bến Tre,</strong></em>&nbsp;anh H&agrave; Quốc Cường, B&iacute; thư Tỉnh Đo&agrave;n Bến Tre cho biết, tranh thủ những ng&agrave;y c&oacute;&nbsp;độ mặn thấp, c&oacute; nước ngọt n&ecirc;n h&agrave;ng chục&nbsp;ĐVTN đ&atilde; hỗ trợ người d&acirc;n đắp đập ngăn mặn, trữ nước ngọt trong mương vườn để sinh hoạt v&agrave; tưới c&acirc;y. Đồng thời, vận động x&agrave; lan hỗ trợ nước ngọt phục vụ cho người d&acirc;n. Ngo&agrave;i ra, Tỉnh đo&agrave;n c&ograve;n vận động c&aacute;c đơn vị, doanh nghiệp hỗ trợ m&aacute;y lọc nước mặn th&agrave;nh ngọt, nước sạch để phục vụ cho d&acirc;n trong m&ugrave;a hạn mặn.&nbsp;B&ecirc;n cạnh đ&oacute;, c&aacute;c cơ sở đo&agrave;n c&ograve;n tuy&ecirc;n truyền đến người d&acirc;n ph&ograve;ng chống dịch Covid - 19.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132277000682006869_hl.jpg\" width=\"600\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Tại S&oacute;c Trăng,</strong></em>&nbsp;Tỉnh Đo&agrave;n cũng ra qu&acirc;n thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc cấp tỉnh như: chương tr&igrave;nh &quot;h&atilde;y l&agrave;m sạch biển&quot;, vệ sinh m&ocirc;i trường, trồng c&acirc;y xanh ở huyện Trần Đề; đồng thời, khởi c&ocirc;ng x&acirc;y dựng 2 cầu n&ocirc;ng th&ocirc;n. Ngo&agrave;i ra, c&aacute;c cơ sở đo&agrave;n trong to&agrave;n tỉnh đồng loạt ra qu&acirc;n ng&agrave;y Chủ nhật xanh với nhiều c&ocirc;ng tr&igrave;nh, phần việc &yacute; nghĩa phục vụ cộng đồng. B&ecirc;n cạnh đ&oacute;, c&aacute;c bạn ĐVTN tuy&ecirc;n truyền v&agrave; tặng khẩu trang miễn ph&iacute; cho người d&acirc;n để ph&ograve;ng dịch Covid - 19.</p>\r\n\r\n<p><em><strong>Tại An Giang,</strong></em>&nbsp;chỉ ti&ecirc;u trong th&aacute;ng Thanh ni&ecirc;n l&agrave; 100% Đo&agrave;n cấp huyện v&agrave; tương đương đăng k&yacute; thực hiện &iacute;t nhất 01 c&ocirc;ng tr&igrave;nh thanh ni&ecirc;n trong tham gia x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, đ&ocirc; thị văn minh v&agrave; nhiệm vụ ch&iacute;nh trị tại đơn vị. Đồng thời, c&oacute; m&ocirc; h&igrave;nh, hoạt động tuy&ecirc;n truyền n&acirc;ng cao &yacute; thức ph&ograve;ng chống dịch bệnh, chăm s&oacute;c sức khỏe cho đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n v&agrave; nh&acirc;n d&acirc;n; tuy&ecirc;n truyền n&acirc;ng cao &yacute; thức chấp h&agrave;nh ph&aacute;p luật khi tham gia giao th&ocirc;ng cho đo&agrave;n vi&ecirc;n, thanh thiếu nhi. Ngo&agrave;i ra, hỗ trợ &iacute;t nhất 1 thanh ni&ecirc;n khởi nghiệp s&aacute;ng tạo hoặc gi&uacute;p đỡ 1 thanh ni&ecirc;n tho&aacute;t ngh&egrave;o bền vững.</p>\r\n\r\n<p><em><strong>Tỉnh đo&agrave;n B&igrave;nh Dương</strong></em>, Th&agrave;nh đo&agrave;n Thuận An phối hợp ra mắt c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc ti&ecirc;u biểu của thanh thiếu ni&ecirc;n năm 2020; trao tặng nh&agrave; &ldquo;Khăn qu&agrave;ng đỏ&rdquo;, khu vui chơi thiếu nhi, học bổng Hồ Văn M&ecirc;n tặng thiếu nhi vượt kh&oacute; học giỏi.</p>\r\n\r\n<p><em><strong>Tại Nghệ An,</strong></em>&nbsp;c&aacute;c cấp bộ Đo&agrave;n to&agrave;n tỉnh tổ chức c&aacute;c hoạt động thiết thực, &yacute; nghĩa theo c&aacute;c nội dung trọng t&acirc;m của Th&aacute;ng v&agrave; nhấn mạnh c&aacute;c hoạt động tuy&ecirc;n truyền ph&ograve;ng, chống dịch bệnh COVID-19 với phương ch&acirc;m GỌN NHẸ - TIẾT KIỆM - AN TO&Agrave;N - HIỆU QUẢ.</p>\r\n\r\n<p><em><strong>Tại Hải Ph&ograve;ng</strong></em>: Th&agrave;nh đo&agrave;n Chỉ đạo Quận đo&agrave;n Ng&ocirc; Quyền đăng cai cấp th&agrave;nh phố tổ chức thực hiện những c&ocirc;ng tr&igrave;nh, phần việc thiết thực, &yacute; nghĩa để bảo vệ m&ocirc;i trường v&agrave; ph&ograve;ng, chống dịch bệnh SASR-CoV-2 như: X&oacute;a điểm đen về r&aacute;c thải tại phường Đ&ocirc;ng Kh&ecirc;; tặng khẩu trang v&agrave; nước rửa tay s&aacute;t khuẩn miễn ph&iacute;; ra qu&acirc;n &quot;M&ocirc; h&igrave;nh Tắt m&aacute;y chờ t&agrave;u&quot;; ra mắt m&ocirc; h&igrave;nh &quot;Th&ugrave;ng r&aacute;c t&aacute;i chế&quot; giảm thiểu r&aacute;c thải nhựa, vật liệu l&agrave;m n&ecirc;n c&aacute;c m&ocirc; h&igrave;nh l&agrave; chai lọ nhựa thu được từ hoạt động đổi r&aacute;c thải nhựa lấy c&acirc;y xanh; ra mắt m&ocirc; h&igrave;nh &quot;Tủ thuốc thanh ni&ecirc;n&quot; tại Ga Hải Ph&ograve;ng; diễu h&agrave;nh tuy&ecirc;n truyền về ATGT với chủ đề: &quot;Đ&atilde; uống rượu bia - Kh&ocirc;ng l&aacute;i xe&quot;; triển khai c&aacute;c hoạt động hưởng ứng &quot;Ng&agrave;y chủ nhật xanh&quot; đồng loạt tr&ecirc;n địa b&agrave;n to&agrave;n quận.</p>', '2020-08-14', '2020-08-30', '2020-08-13 22:22:49', '2020-08-13 22:22:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `childs`
--

CREATE TABLE `childs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `childs`
--

INSERT INTO `childs` (`id`, `name`, `year_old`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'con 1', '12', 1, '2020-08-13 23:23:27', '2020-08-13 23:23:27'),
(2, 'con 2', '10', 1, '2020-08-13 23:24:28', '2020-08-13 23:24:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class_child`
--

CREATE TABLE `class_child` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class_child`
--

INSERT INTO `class_child` (`id`, `class_id`, `child_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, NULL, NULL),
(6, 4, 1, NULL, NULL),
(10, 1, 2, NULL, NULL),
(11, 4, 2, NULL, NULL),
(12, 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class_room`
--

CREATE TABLE `class_room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_member` bigint(20) NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class_room`
--

INSERT INTO `class_room` (`id`, `name`, `description`, `class_member`, `start_date`, `end_date`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Võ 1', '(Thứ 2 - 6) : 17h00 - 19h00', 20, '2020-08-14', '2020-08-30', 2, '2020-08-13 23:21:39', '2020-08-13 23:21:39'),
(4, 'Võ 2', '(Thứ 7 - CN) : 17h00 - 19h00', 20, '2020-08-14', '2020-08-14', 2, '2020-08-13 23:34:47', '2020-08-13 23:34:47'),
(5, 'Lớp bơi 1', '(Thứ 2 - 6) : 17h00 - 19h00', 10, '2020-08-14', '2020-09-14', 3, '2020-08-14 01:05:08', '2020-08-14 01:05:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `maximum_student` bigint(20) NOT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `title`, `content`, `price`, `maximum_student`, `discount`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 'Võ thuật cơ bản', 'vo.jpg', 'Võ thuật cơ bản - rèn luyện sức khỏe', '<p>V&otilde; thuật cơ bản - r&egrave;n luyện sức khỏe</p>', 200000, 20, 10.00, '2020-08-14', '2020-12-14', '2020-08-13 22:20:25', '2020-08-13 22:20:25'),
(3, 'Kỹ thuật bơi cơ bản', 'kien-thuc-boi.jpg', 'Kỹ thuật bơi cơ bản', '<p>Lớp dạy bơi cho c&aacute;c b&eacute;</p>', 200000, 10, 25.00, '2020-08-14', '2020-10-14', '2020-08-14 01:04:41', '2020-08-14 01:04:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_08_10_021023_create_roles_table', 1),
(3, '2020_08_10_022542_create_permissions_table', 1),
(4, '2020_08_10_022734_create_permission_roles_table', 1),
(5, '2020_08_10_022831_create_role_user_table', 1),
(6, '2020_08_10_081902_create_parents_table', 1),
(7, '2020_08_11_022139_create_courses_table', 1),
(8, '2020_08_11_024052_create_activities_table', 1),
(9, '2020_08_13_144104_create_appointments_table', 1),
(10, '2020_08_14_043018_create_class_room_table', 1),
(11, '2020_08_14_043637_create_childs_table', 1),
(12, '2020_08_14_043853_create_class_child_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parents`
--

CREATE TABLE `parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parents`
--

INSERT INTO `parents` (`id`, `full_name`, `address`, `phone_no`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'phu huynh 1', '12 ngo quyen', '0123456789', 'phuhuynh1@gmail.com', 2, '2020-08-13 22:21:28', '2020-08-13 22:21:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'create_user', 'Create user', '2020-08-13 21:44:05', '2020-08-13 21:44:05'),
(2, 'edit_user', 'Edit user', '2020-08-13 21:44:05', '2020-08-13 21:44:05'),
(3, 'view_user', 'View user', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(4, 'detail_user', 'Detail user', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(5, 'delete_user', 'Delete user', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(6, 'create_role', 'Create role', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(7, 'edit_role', 'Edit role', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(8, 'view_role', 'View role', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(9, 'detail_role', 'Detail role', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(10, 'delete_role', 'Delete role', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(11, 'create_child', 'Create child', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(12, 'edit_child', 'Edit child', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(13, 'view_child', 'View child', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(14, 'detail_child', 'Detail child', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(15, 'delete_child', 'Delete child', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(16, 'create_course', 'Create course', '2020-08-13 21:44:06', '2020-08-13 21:44:06'),
(17, 'edit_course', 'Edit course', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(18, 'view_course', 'View course', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(19, 'detail_course', 'Detail course', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(20, 'delete_course', 'Delete course', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(21, 'create_active', 'Create active', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(22, 'edit_active', 'Edit active', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(23, 'view_active', 'View active', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(24, 'detail_active', 'Detail active', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(25, 'delete_active', 'Delete active', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(26, 'create_appointment', 'Create appointment', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(27, 'edit_appointment', 'Edit appointment', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(28, 'view_appointment', 'View appointment', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(29, 'detail_appointment', 'Detail appointment', '2020-08-13 21:44:07', '2020-08-13 21:44:07'),
(30, 'delete_appointment', 'Delete appointment', '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(31, 'create_class', 'Create class', '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(32, 'edit_class', 'Edit class', '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(33, 'view_class', 'View class', '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(34, 'detail_class', 'Detail class', '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(35, 'delete_class', 'Delete class', '2020-08-13 21:44:08', '2020-08-13 21:44:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_roles`
--

CREATE TABLE `permission_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_roles`
--

INSERT INTO `permission_roles` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(2, 2, 1, '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(3, 3, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(4, 4, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(5, 5, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(6, 6, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(7, 7, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(8, 8, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(9, 9, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(10, 10, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(11, 11, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(12, 12, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(13, 13, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(14, 14, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(15, 15, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(16, 16, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(17, 17, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(18, 18, 1, '2020-08-13 21:44:09', '2020-08-13 21:44:09'),
(19, 19, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(20, 20, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(21, 21, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(22, 22, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(23, 23, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(24, 24, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(25, 25, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(26, 26, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(27, 27, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(28, 28, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(29, 29, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(30, 30, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(31, 31, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(32, 32, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(33, 33, 1, '2020-08-13 21:44:10', '2020-08-13 21:44:10'),
(34, 34, 1, '2020-08-13 21:44:11', '2020-08-13 21:44:11'),
(35, 35, 1, '2020-08-13 21:44:11', '2020-08-13 21:44:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'ROLE_ADMIN', 'Administrator', '2020-08-13 21:44:05', '2020-08-13 21:44:05'),
(2, 'ROLE_CUSTOMER', 'Customer', '2020-08-13 21:44:05', '2020-08-13 21:44:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-08-13 21:44:08', '2020-08-13 21:44:08'),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$TXeaTHbd/AKrQtO9Bc5wYepHUxlyMy9EM2oO2kN05ovJlMEYYty1e', NULL, '2020-08-13 21:44:05', '2020-08-13 21:44:05'),
(2, 'phu huynh 1', 'phuhuynh1@gmail.com', NULL, '$2y$10$Z.CQ74O710Np.wnBSq2X9e99l26mbZm9N4GR5y6mc6KO7gtNmIWqG', NULL, '2020-08-13 22:21:27', '2020-08-13 22:21:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_parent_id_foreign` (`parent_id`);

--
-- Chỉ mục cho bảng `childs`
--
ALTER TABLE `childs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `childs_parent_id_foreign` (`parent_id`);

--
-- Chỉ mục cho bảng `class_child`
--
ALTER TABLE `class_child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_child_class_id_foreign` (`class_id`),
  ADD KEY `class_child_child_id_foreign` (`child_id`);

--
-- Chỉ mục cho bảng `class_room`
--
ALTER TABLE `class_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_room_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parents_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_roles_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_roles_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `childs`
--
ALTER TABLE `childs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `class_child`
--
ALTER TABLE `class_child`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `class_room`
--
ALTER TABLE `class_room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `permission_roles`
--
ALTER TABLE `permission_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `childs`
--
ALTER TABLE `childs`
  ADD CONSTRAINT `childs_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `class_child`
--
ALTER TABLE `class_child`
  ADD CONSTRAINT `class_child_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `childs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_child_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `class_room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `class_room`
--
ALTER TABLE `class_room`
  ADD CONSTRAINT `class_room_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `parents`
--
ALTER TABLE `parents`
  ADD CONSTRAINT `parents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_roles`
--
ALTER TABLE `permission_roles`
  ADD CONSTRAINT `permission_roles_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
