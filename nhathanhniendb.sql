-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 13, 2020 lúc 05:02 PM
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
(1, 'Sôi nổi các hoạt động ra quân Tháng Thanh niên năm 2020', 'p2.jpg', 'Sôi nổi các hoạt động ra quân Tháng Thanh niên năm 2020', '<p>&nbsp; &nbsp;Web.ĐTN: Ngay từ những ng&agrave;y đầu th&aacute;ng 3, nhiều tỉnh, th&agrave;nh đo&agrave;n trong cả nước tổ chức ra qu&acirc;n Th&aacute;ng thanh ni&ecirc;n năm 2020 với nhiều hoạt động an sinh x&atilde; hội &yacute; nghĩa trong bối cảnh dịch bệnh COVID-19 diễn biến phức tạp.</p>\r\n\r\n<p>Trước t&igrave;nh h&igrave;nh dịch bệnh COVID-19 đang c&oacute; diễn biến phức tạp, Ban B&iacute; thư Trung ương Đo&agrave;n kh&ocirc;ng tổ chức lễ ra qu&acirc;n cấp to&agrave;n quốc v&agrave;&nbsp;đề nghị Ban thường vụ c&aacute;c tỉnh, th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc kh&ocirc;ng tổ chức lễ ra qu&acirc;n, lễ khởi động Th&aacute;ng Thanh ni&ecirc;n c&oacute; tụ tập đ&ocirc;ng người, m&agrave; ch&uacute; trọng&nbsp;triển khai c&aacute;c hoạt động cụ thể, thiết thực ph&ugrave; hợp với t&igrave;nh h&igrave;nh địa phương v&agrave; thực hiện tuy&ecirc;n truyền về kết quả hoạt động, những đổi mới về&nbsp;phương thức tổ chức, triển khai c&aacute;c hoạt động trong bối cảnh dịch bệnh COVID-19.</p>\r\n\r\n<p><img alt=\"\" src=\"https://nhandan.com.vn/cdn/vn/images/2020/anhngoc/03/03.jpg\" width=\"600\" /></p>\r\n\r\n<p>C&aacute;c đội h&igrave;nh t&igrave;nh nguyện đến từng nh&agrave; để tuy&ecirc;n truyền ngăn chặn dịch bệnh Covid-19.</p>\r\n\r\n<p>Theo đ&oacute;, Ban b&iacute; thư Trung ương Đo&agrave;n đề nghị Ban thường vụ c&aacute;c tỉnh, th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc tiếp tục đẩy mạnh tuy&ecirc;n truyền đến đ&ocirc;ng đảo đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n v&agrave; nh&acirc;n d&acirc;n về diễn biến của dịch bệnh COVID-19 g&acirc;y ra, c&aacute;c biện ph&aacute;p ph&ograve;ng, chống dịch bệnh tại cộng đồng th&ocirc;ng qua hệ thống b&aacute;o ch&iacute; truyền th&ocirc;ng của Đo&agrave;n v&agrave; qua c&aacute;c trang mạng x&atilde; hội.&nbsp;Hạn chế tổ chức c&aacute;c hoạt động tập trung đ&ocirc;ng người trong thời điểm dịch bệnh COVID-19 đang diễn biến phức tạp như hiện nay. C&aacute;c hoạt động tổ chức tại địa phương, đơn vị đảm bảo theo chỉ đạo của cấp ủy, ch&iacute;nh quyền địa phương, đơn vị.</p>\r\n\r\n<p>Trong hai ng&agrave;y vừa qua, c&aacute;c tỉnh th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc đ&atilde; tổ chức khởi động Th&aacute;ng thanh ni&ecirc;n bằng nhiều h&igrave;nh thức kh&aacute;c nhau ti&ecirc;u biểu như:&nbsp;<em><strong>Th&agrave;nh đo&agrave;n H&agrave; Nội</strong></em>&nbsp;tổ chức khởi động Th&aacute;ng thanh ni&ecirc;n bằng h&igrave;nh thức ph&aacute;t trực tiếp tr&ecirc;n Fanpage của Th&agrave;nh đo&agrave;n H&agrave; Nội v&agrave; 100% c&aacute;c cơ sở Đo&agrave;n trực thuộc theo d&otilde;i v&agrave; chia sẻ tr&ecirc;n fanpage của đơn vị.&nbsp;Đ&acirc;y l&agrave; h&igrave;nh thức s&aacute;ng tạo khởi động Th&aacute;ng Thanh ni&ecirc;n nhằm thực hiện chỉ đạo của Ban B&iacute; thư Trung ương Đo&agrave;n trong bối cảnh dịch Covid-19 đang c&oacute; diễn biến phức tạp, tr&aacute;nh tập trung đ&ocirc;ng người.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132277078177955058_HN.jpg\" width=\"600\" /></p>\r\n\r\n<p>Dọn vệ sinh m&ocirc;i trường gắn với chương tr&igrave;nh &ldquo;Ng&agrave;y Chủ nhật xanh&rdquo; của Quận đo&agrave;n Long Bi&ecirc;n.</p>\r\n\r\n<p><em><strong>Tại Y&ecirc;n B&aacute;i,</strong></em>&nbsp;Ban Thường vụ Tỉnh đo&agrave;n kh&ocirc;ng tổ chức phần Lễ m&agrave; tập chung v&agrave;o thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc thanh ni&ecirc;n cụ thể, thiết thực phục vụ người d&acirc;n,&nbsp;như: tư vấn sức khỏe, kh&aacute;m chữa bệnh, cấp thuốc, tặng qu&agrave; cho người ngh&egrave;o v&agrave; đối tượng ch&iacute;nh s&aacute;ch; hỗ trợ thiếu nhi c&oacute; ho&agrave;n cảnh kh&oacute; khăn; tổ chức hiến m&aacute;u t&igrave;nh nguyện; tổ chức c&aacute;c hoạt động th&uacute;c đẩy tinh thần s&aacute;ng tạo, nghi&ecirc;n cứu khoa học của thanh ni&ecirc;n; triển khai Đề &aacute;n Đề &aacute;n &ldquo;Hỗ trợ, ph&aacute;t triển phong tr&agrave;o thanh ni&ecirc;n Y&ecirc;n B&aacute;i khởi nghiệp giai đoạn 2019&nbsp; - 2020 v&agrave; Đề &aacute;n &ldquo;Tư vấn hướng nghiệp, giới thiệu việc l&agrave;m cho thanh thiếu ni&ecirc;n giai đoạn 2018 - 2022&rdquo;...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://baoyenbai.com.vn/Includes/NewsDetail/3_2020/dt_1320201452_ho-tro.jpg\" width=\"600\" /></p>\r\n\r\n<p>Tuổi trẻ Y&ecirc;n B&aacute;i trao biển hỗ trợ tặng 30 tấn xi măng cho x&atilde; Minh Xu&acirc;n, huyện Lục Y&ecirc;n.</p>\r\n\r\n<p>C&ugrave;ng đ&oacute;, c&aacute;c tỉnh, th&agrave;nh đo&agrave;n, đo&agrave;n trực thuộc đ&atilde; chủ động điều chỉnh nội dung v&agrave; phương thức hoạt động của c&aacute;c cấp bộ Đo&agrave;n trong Th&aacute;ng Thanh ni&ecirc;n 2020 ph&ugrave; hợp với t&igrave;nh h&igrave;nh dịch bệnh COVID-19; tập trung triển khai c&aacute;c c&ocirc;ng việc cụ thể theo 7 nội dung trọng t&acirc;m Kế hoạch số 225-KH/TWĐTN-TNNT ng&agrave;y 13/02/2020 của Ban B&iacute; thư Trung ương Đo&agrave;n về Th&aacute;ng Thanh ni&ecirc;n năm 2020. Trong đ&oacute;, ch&uacute; &yacute; triển khai c&aacute;c tuyến c&ocirc;ng việc về c&ocirc;ng t&aacute;c ph&ograve;ng chống dịch COVID-19 theo c&ocirc;ng văn số 4179-CV/TWĐTN-VP ng&agrave;y 28/01/2020 của Ban B&iacute; thư Trung ương Đo&agrave;n.</p>\r\n\r\n<p>Để đảm bảo&nbsp;c&ocirc;ng t&aacute;c ph&ograve;ng, chống dịch, ĐVTN được&nbsp;y&ecirc;u cầu đeo khẩu trang, sử dụng nước s&aacute;t khuẩn tay trước, trong v&agrave; sau qu&aacute; tr&igrave;nh tham gia hoạt động; tiếp tục tổ chức c&aacute;c hoạt động hỗ trợ nh&acirc;n d&acirc;n ph&ograve;ng chống dịch bệnh COVID-19 v&agrave; c&aacute;c biện ph&aacute;p ph&ograve;ng chống dịch bệnh tại cộng đồng. Nếu ph&aacute;t hiện c&aacute;c trường hợp nghi ngờ mắc bệnh phải kịp thời th&ocirc;ng b&aacute;o với c&aacute;c cơ quan chức năng v&agrave;&nbsp;c&oacute; c&aacute;c phương &aacute;n đ&aacute;p ứng hiệu quả với t&igrave;nh dịch bệnh.</p>\r\n\r\n<p><strong>Một số kết quả những ng&agrave;y đầu th&aacute;ng thanh ni&ecirc;n 2020:</strong></p>\r\n\r\n<p><em><strong>Th&agrave;nh Đo&agrave;n TP Hồ Ch&iacute; Minh&nbsp;</strong></em>triển khai 05&nbsp;c&ocirc;ng tr&igrave;nh cấp th&agrave;nh phố, trong đ&oacute; c&oacute; nhiều c&ocirc;ng tr&igrave;nh hướng đến c&ocirc;ng t&aacute;c c&ugrave;ng th&agrave;nh phố chung tay dập dịch Covid-19. Cụ thể, tổ chức vệ sinh, cải tạo cảnh quan, phun thuốc khử m&ugrave;i v&agrave; chống sốt xuất huyết tại tuyến k&ecirc;nh Tham Lương - Rạch Nước L&ecirc;n (cầu Bến Lội); tuy&ecirc;n truyền v&agrave; hướng dẫn thanh ni&ecirc;n c&ocirc;ng nh&acirc;n ph&ograve;ng, chống dịch Covid-19 cho 400 hộ d&acirc;n; phun khử khuẩn khu nh&agrave; trọ, tặng x&agrave; b&ocirc;ng rửa tay v&agrave; khẩu trang y tế cho thanh ni&ecirc;n, c&ocirc;ng nh&acirc;n; lắp đặt b&igrave;nh dung dịch rửa tay, vệ sinh khử khuẩn tại 18 tầng của chung cư L&ecirc; Th&agrave;nh (phường Trị Đ&ocirc;ng A, quận B&igrave;nh T&acirc;n).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.thanhdoan.hochiminhcity.gov.vn/ThanhDoan/webtd/Content/news/2020/3/33223/53c276dd1496efc8b687.jpg\" width=\"600\" /></p>\r\n\r\n<p>Tổ chức vệ sinh, cải tạo cảnh quan, phun thuốc khử m&ugrave;i v&agrave; chống sốt xuất huyết tại tuyến k&ecirc;nh Tham Lương - Rạch Nước L&ecirc;n (cầu Bến Lội)</p>\r\n\r\n<p><em><strong>Tại Đồng Th&aacute;p,</strong></em>&nbsp;anh Nguyễn Văn Vũ Minh, B&iacute; thư Tỉnh Đo&agrave;n cho biết, trước diễn biến phức tạp của dịch Covid - 19 n&ecirc;n c&aacute;c cấp đo&agrave;n kh&ocirc;ng tổ chức lễ ra qu&acirc;n như mọi năm m&agrave; tập trung triển khai c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc ph&ugrave; hợp với t&igrave;nh h&igrave;nh thực tế, nhất l&agrave; tập trung tuy&ecirc;n truyền s&acirc;u rộng gi&uacute;p người d&acirc;n hiểu r&otilde; hơn để ph&ograve;ng chống dịch một c&aacute;ch tốt nhất. Sau ph&aacute;t động, nhiều bạn ĐVTN tuy&ecirc;n truyền c&aacute;c biện ph&aacute;p ph&ograve;ng dịch Covid - 19, ph&aacute;t khẩu trang, x&agrave; b&ocirc;ng miễn ph&iacute; cho người d&acirc;n x&atilde; T&acirc;n Thuận T&acirc;y, b&agrave;n giao c&ocirc;ng tr&igrave;nh bồn nước rửa tay d&agrave;nh cho học sinh trường THCS Phan Bội Ch&acirc;u. Ngo&agrave;i ra, Tỉnh đo&agrave;n c&ograve;n trao 700 triệu đồng vốn vay khởi nghiệp cho 6 dự &aacute;n của thanh ni&ecirc;n.</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132276089113013384_2.jpg\" width=\"600\" /></p>\r\n\r\n<p>Trao tặng bồn rửa tay cho trường học</p>\r\n\r\n<p><em><strong>Tại Quảng Trị:</strong></em>&nbsp;tỉnh Đo&agrave;n đ&atilde; chỉ đạo 100% c&aacute;c cấp bộ Đo&agrave;n trong to&agrave;n tỉnh đồng loạt ra qu&acirc;n &ldquo;Ng&agrave;y Chủ nhật xanh&rdquo; lần thứ&nbsp;nhất, năm 2020 v&agrave; tổ chức c&aacute;c hoạt động ph&ograve;ng chống dịch Covid - 19.</p>\r\n\r\n<p>Đợt ra qu&acirc;n &ldquo;Ng&agrave;y Chủ nhật xanh&rdquo; lần n&agrave;y được c&aacute;c cấp bộ Đo&agrave;n lựa chọn nhiều c&ocirc;ng tr&igrave;nh, phần việc cụ thể, thiết thực như: Tổ chức ra qu&acirc;n thực hiện vệ sinh m&ocirc;i trường, thu gom, ph&acirc;n loại, xử l&yacute; r&aacute;c thải, t&aacute;i chế r&aacute;c thải th&agrave;nh vật dụng th&acirc;n thiện với m&ocirc;i trường; vệ sinh c&aacute;c tuyến đường thanh ni&ecirc;n tự quản; b&oacute;c gỡ c&aacute;c biển quảng c&aacute;o rao vặt tr&aacute;i ph&eacute;p; vệ sinh c&aacute;c Nghĩa trang liệt sỹ, di t&iacute;ch lịch sử; trồng c&acirc;y xanh; tuy&ecirc;n truyền, n&acirc;ng cao nhận thức của c&aacute;c tầng lớp nh&acirc;n d&acirc;n về t&aacute;c hại của r&aacute;c thải nhựa, hạn chế sử dụng c&aacute;c sản phẩm nhựa d&ugrave;ng 1 lần, t&uacute;i nilon, ph&acirc;n loại r&aacute;c thải, đổ r&aacute;c đ&uacute;ng nơi quy định, thay thế t&uacute;i nilon bằng c&aacute;c loại sản phẩm th&acirc;n thiện với m&ocirc;i trường; tuy&ecirc;n truyền ph&ograve;ng, chống dịch Covid -19.</p>\r\n\r\n<p><em><strong>Tại&nbsp;Bến Tre,</strong></em>&nbsp;anh H&agrave; Quốc Cường, B&iacute; thư Tỉnh Đo&agrave;n Bến Tre cho biết, tranh thủ những ng&agrave;y c&oacute;&nbsp;độ mặn thấp, c&oacute; nước ngọt n&ecirc;n h&agrave;ng chục&nbsp;ĐVTN đ&atilde; hỗ trợ người d&acirc;n đắp đập ngăn mặn, trữ nước ngọt trong mương vườn để sinh hoạt v&agrave; tưới c&acirc;y. Đồng thời, vận động x&agrave; lan hỗ trợ nước ngọt phục vụ cho người d&acirc;n. Ngo&agrave;i ra, Tỉnh đo&agrave;n c&ograve;n vận động c&aacute;c đơn vị, doanh nghiệp hỗ trợ m&aacute;y lọc nước mặn th&agrave;nh ngọt, nước sạch để phục vụ cho d&acirc;n trong m&ugrave;a hạn mặn.&nbsp;B&ecirc;n cạnh đ&oacute;, c&aacute;c cơ sở đo&agrave;n c&ograve;n tuy&ecirc;n truyền đến người d&acirc;n ph&ograve;ng chống dịch Covid - 19.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132277000682006869_hl.jpg\" width=\"600\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>Tại S&oacute;c Trăng,</strong></em>&nbsp;Tỉnh Đo&agrave;n cũng ra qu&acirc;n thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc cấp tỉnh như: chương tr&igrave;nh &quot;h&atilde;y l&agrave;m sạch biển&quot;, vệ sinh m&ocirc;i trường, trồng c&acirc;y xanh ở huyện Trần Đề; đồng thời, khởi c&ocirc;ng x&acirc;y dựng 2 cầu n&ocirc;ng th&ocirc;n. Ngo&agrave;i ra, c&aacute;c cơ sở đo&agrave;n trong to&agrave;n tỉnh đồng loạt ra qu&acirc;n ng&agrave;y Chủ nhật xanh với nhiều c&ocirc;ng tr&igrave;nh, phần việc &yacute; nghĩa phục vụ cộng đồng. B&ecirc;n cạnh đ&oacute;, c&aacute;c bạn ĐVTN tuy&ecirc;n truyền v&agrave; tặng khẩu trang miễn ph&iacute; cho người d&acirc;n để ph&ograve;ng dịch Covid - 19.</p>\r\n\r\n<p><em><strong>Tại An Giang,</strong></em>&nbsp;chỉ ti&ecirc;u trong th&aacute;ng Thanh ni&ecirc;n l&agrave; 100% Đo&agrave;n cấp huyện v&agrave; tương đương đăng k&yacute; thực hiện &iacute;t nhất 01 c&ocirc;ng tr&igrave;nh thanh ni&ecirc;n trong tham gia x&acirc;y dựng n&ocirc;ng th&ocirc;n mới, đ&ocirc; thị văn minh v&agrave; nhiệm vụ ch&iacute;nh trị tại đơn vị. Đồng thời, c&oacute; m&ocirc; h&igrave;nh, hoạt động tuy&ecirc;n truyền n&acirc;ng cao &yacute; thức ph&ograve;ng chống dịch bệnh, chăm s&oacute;c sức khỏe cho đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n v&agrave; nh&acirc;n d&acirc;n; tuy&ecirc;n truyền n&acirc;ng cao &yacute; thức chấp h&agrave;nh ph&aacute;p luật khi tham gia giao th&ocirc;ng cho đo&agrave;n vi&ecirc;n, thanh thiếu nhi. Ngo&agrave;i ra, hỗ trợ &iacute;t nhất 1 thanh ni&ecirc;n khởi nghiệp s&aacute;ng tạo hoặc gi&uacute;p đỡ 1 thanh ni&ecirc;n tho&aacute;t ngh&egrave;o bền vững.</p>\r\n\r\n<p><em><strong>Tỉnh đo&agrave;n B&igrave;nh Dương</strong></em>, Th&agrave;nh đo&agrave;n Thuận An phối hợp ra mắt c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc ti&ecirc;u biểu của thanh thiếu ni&ecirc;n năm 2020; trao tặng nh&agrave; &ldquo;Khăn qu&agrave;ng đỏ&rdquo;, khu vui chơi thiếu nhi, học bổng Hồ Văn M&ecirc;n tặng thiếu nhi vượt kh&oacute; học giỏi.</p>\r\n\r\n<p><em><strong>Tại Nghệ An,</strong></em>&nbsp;c&aacute;c cấp bộ Đo&agrave;n to&agrave;n tỉnh tổ chức c&aacute;c hoạt động thiết thực, &yacute; nghĩa theo c&aacute;c nội dung trọng t&acirc;m của Th&aacute;ng v&agrave; nhấn mạnh c&aacute;c hoạt động tuy&ecirc;n truyền ph&ograve;ng, chống dịch bệnh COVID-19 với phương ch&acirc;m GỌN NHẸ - TIẾT KIỆM - AN TO&Agrave;N - HIỆU QUẢ.</p>\r\n\r\n<p><em><strong>Tại Hải Ph&ograve;ng</strong></em>: Th&agrave;nh đo&agrave;n Chỉ đạo Quận đo&agrave;n Ng&ocirc; Quyền đăng cai cấp th&agrave;nh phố tổ chức thực hiện những c&ocirc;ng tr&igrave;nh, phần việc thiết thực, &yacute; nghĩa để bảo vệ m&ocirc;i trường v&agrave; ph&ograve;ng, chống dịch bệnh SASR-CoV-2 như: X&oacute;a điểm đen về r&aacute;c thải tại phường Đ&ocirc;ng Kh&ecirc;; tặng khẩu trang v&agrave; nước rửa tay s&aacute;t khuẩn miễn ph&iacute;; ra qu&acirc;n &quot;M&ocirc; h&igrave;nh Tắt m&aacute;y chờ t&agrave;u&quot;; ra mắt m&ocirc; h&igrave;nh &quot;Th&ugrave;ng r&aacute;c t&aacute;i chế&quot; giảm thiểu r&aacute;c thải nhựa, vật liệu l&agrave;m n&ecirc;n c&aacute;c m&ocirc; h&igrave;nh l&agrave; chai lọ nhựa thu được từ hoạt động đổi r&aacute;c thải nhựa lấy c&acirc;y xanh; ra mắt m&ocirc; h&igrave;nh &quot;Tủ thuốc thanh ni&ecirc;n&quot; tại Ga Hải Ph&ograve;ng; diễu h&agrave;nh tuy&ecirc;n truyền về ATGT với chủ đề: &quot;Đ&atilde; uống rượu bia - Kh&ocirc;ng l&aacute;i xe&quot;; triển khai c&aacute;c hoạt động hưởng ứng &quot;Ng&agrave;y chủ nhật xanh&quot; đồng loạt tr&ecirc;n địa b&agrave;n to&agrave;n quận.</p>', '2020-08-13', '2020-08-15', '2020-08-13 08:01:04', '2020-08-13 08:01:04'),
(2, 'Trà Vinh: Góp sức trẻ cùng nhân dân chống dịch Covid-19', 'p3.png', 'Trà Vinh: Góp sức trẻ cùng nhân dân chống dịch Covid-19', '<p>&nbsp; &nbsp;Web.ĐTN: Với sự đo&agrave;n kết, chung sức, chung l&ograve;ng vượt qua kh&oacute; khăn, c&aacute;c cấp bộ Đo&agrave;n trong tỉnh Tr&agrave; Vinh đ&atilde; ho&agrave;n th&agrave;nh Th&aacute;ng Thanh ni&ecirc;n 2020 với nhiều kết quả đ&aacute;ng ghi nhận.</p>\r\n\r\n<p>Với chủ đề&nbsp;<em>&ldquo;Tuổi trẻ Tr&agrave; Vinh chung tay x&acirc;y dựng n&ocirc;ng th&ocirc;n mới v&agrave; đ&ocirc; thị văn minh&rdquo;</em>, Th&aacute;ng Thanh ni&ecirc;n (TTN) năm 2020 được c&aacute;c cấp bộ Đo&agrave;n tập trung triển khai s&aacute;ng tạo, hiệu quả, với c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc thanh ni&ecirc;n cụ thể.</p>\r\n\r\n<p>Sau 01 th&aacute;ng triển khai s&ocirc;i nổi, Tuổi trẻ tỉnh nh&agrave; đ&atilde; chung tay thực hiện nhiều hoạt động, trọng t&acirc;m như: C&aacute;c hoạt động tuổi trẻ chung tay x&acirc;y dựng n&ocirc;ng th&ocirc;n mới v&agrave; đ&ocirc; thị văn minh; thực hiện Chỉ thị 15-CT/TU của Ban Thường vụ Tỉnh ủy&nbsp;<em>&ldquo;Về việc tăng cường c&ocirc;ng t&aacute;c quản l&yacute; trật tự x&acirc;y dựng v&agrave; vệ sinh m&ocirc;i trường tại c&aacute;c đ&ocirc; thị, khu d&acirc;n cư, trong hoạt động sản xuất, kinh doanh, dịch vụ tr&ecirc;n địa b&agrave;n tỉnh Tr&agrave; Vinh&rdquo;</em>; c&aacute;c hoạt động an sinh x&atilde; hội, phục vụ người d&acirc;n v&agrave; hoạt động ph&ograve;ng, chống dịch bệnh Covid-19&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132313959035617700_hinh%204.jpg\" width=\"600\" /></p>\r\n\r\n<p>Tuy&ecirc;n truyền ph&ograve;ng, chống dịch Covid-19</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trong hoạt động tuổi trẻ chung tay x&acirc;y dựng n&ocirc;ng th&ocirc;n mới v&agrave; đ&ocirc; thị văn minh qua 01 th&aacute;ng thực hiện, c&aacute;c cấp bộ Đo&agrave;n trong tỉnh đ&atilde; chủ động tham mưu, l&agrave;m việc cấp ủy Đảng, ch&iacute;nh quyền địa phương, huy động, kết nối c&aacute;c nguồn lực, đội h&igrave;nh thanh ni&ecirc;n tham gia thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh, phần việc như: sửa chữa, x&acirc;y dựng tr&ecirc;n 08km đường n&ocirc;ng th&ocirc;n; x&acirc;y dựng mới 03 cầu n&ocirc;ng th&ocirc;n, triển khai 23km c&ocirc;ng tr&igrave;nh thắp s&aacute;ng đường n&ocirc;ng th&ocirc;n, x&acirc;y dựng, sửa chữa s&acirc;n chơi cho thiếu nhi, đường hoa thanh ni&ecirc;n...</p>\r\n\r\n<p>Thực hiện Chỉ thị 15-CT/TU của Ban Thường vụ Tỉnh ủy, trong TTN năm 2020, c&aacute;c huyện, thị, th&agrave;nh đo&agrave;n v&agrave; đo&agrave;n trực thuộc tập trung tổ chức thực hiện c&aacute;c c&ocirc;ng tr&igrave;nh phần việc như: ra qu&acirc;n đồng loạt&nbsp;<em>&ldquo;Ng&agrave;y chủ Nhật xanh&rdquo;</em>, thu gom v&agrave; xử l&yacute; tr&ecirc;n 23 tấn r&aacute;c thải c&aacute;c khu vực chợ, khu vực đ&ocirc;ng d&acirc;n cư; khai th&ocirc;ng d&ograve;ng chảy tr&ecirc;n 23km; ph&aacute;t hoang bụi rậm, vệ sinh cảnh quan m&ocirc;i trường gần 140km; trồng mới v&agrave; chăm s&oacute;c 80km tuyến đường hoa thanh ni&ecirc;n v&agrave; trồng mới tr&ecirc;n 13.700 c&acirc;y xanh, hoa kiểng c&aacute;c loại.</p>\r\n\r\n<p>Về hoạt động an sinh x&atilde; hội, phục vụ người d&acirc;n, c&aacute;c cấp bộ Đo&agrave;n đ&atilde; triển khai 126 hoạt động t&igrave;nh nguyện, an sinh x&atilde; hội bằng những c&ocirc;ng tr&igrave;nh phần việc cụ thể, thiết thực, mang lại hiệu ứng x&atilde; hội cao như: tổ chức kh&aacute;m bệnh v&agrave; tư vấn sức khỏe, ph&aacute;t thuốc miễn ph&iacute; cho tr&ecirc;n 630 ĐVTN, học sinh v&agrave; người d&acirc;n; thăm hỏi, tặng qu&agrave; cho 344 gia đ&igrave;nh ch&iacute;nh s&aacute;ch, mẹ Việt Nam anh h&ugrave;ng; sửa chữa, x&acirc;y dựng mới 17 căn nh&agrave; nh&acirc;n &aacute;i; trao 121 suất học bổng, hơn 300 phần qu&agrave; cho học sinh ngh&egrave;o, x&acirc;y dựng mới 03 điểm vui chơi cho thanh thiếu nhi, tổng trị gi&aacute; tr&ecirc;n 1,8 tỷ đồng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://doanthanhnien.vn/Content/uploads/images/132313959223899210_hinh%202.png\" width=\"600\" /></p>\r\n\r\n<p>L&atilde;nh đạo Tỉnh đo&agrave;n c&ugrave;ng c&aacute;c đơn vị thăm, tặng qu&agrave; gia đ&igrave;nh ch&iacute;nh s&aacute;ch</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đặc biệt, nhằm gi&uacute;p người d&acirc;n v&agrave; cộng đồng tr&ecirc;n địa b&agrave;n tỉnh kịp thời ph&ograve;ng, chống dịch bệnh Covid-19, trong TTN c&aacute;c cấp bộ Đo&agrave;n đ&atilde; phối hợp tổ chức 367 cuộc tuy&ecirc;n truyền về dịch bệnh, tổ chức ph&aacute;t tr&ecirc;n 7.000 tờ rơi tuy&ecirc;n truyền ph&ograve;ng, chống dịch, cấp ph&aacute;t tr&ecirc;n 10.0000 khẩu trang y tế miễn ph&iacute; cho đo&agrave;n vi&ecirc;n, thanh ni&ecirc;n v&agrave; người d&acirc;n. Vận động v&agrave; hướng dẫn đo&agrave;n vi&ecirc;n thanh ni&ecirc;n, người d&acirc;n thực hiện khai b&aacute;o y tế tự nguyện để cung cấp th&ocirc;ng tin sức khỏe v&agrave; hỗ trợ ng&agrave;nh y tế ph&ograve;ng, chống dịch th&ocirc;ng qua ứng dụng NCOVI, nhắn tin ủng hộ qua số 1407 để c&ugrave;ng g&oacute;p sức chống dịch Covid-19.</p>\r\n\r\n<p>Th&agrave;nh lập c&aacute;c đội h&igrave;nh thanh ni&ecirc;n t&igrave;nh nguyện hỗ trợ ph&ograve;ng, chống dịch bệnh Covid-19 tr&ecirc;n địa b&agrave;n tỉnh. Trong đ&oacute;, tỉnh th&agrave;nh lập 03 đội h&igrave;nh thanh ni&ecirc;n t&igrave;nh nguyện gồm: Đội h&igrave;nh hỗ trợ đo th&acirc;n nhiệt trong c&aacute;c khu c&aacute;ch l&yacute; tập trung; đội h&igrave;nh chuy&ecirc;n chở c&aacute;c suất thức ăn cho c&aacute;c khu c&aacute;c ly tập trung v&agrave; đội h&igrave;nh thanh ni&ecirc;n t&igrave;nh nguyện tham gia tại 04 điểm chốt kiểm ra y tế tr&ecirc;n địa b&agrave;n tỉnh. Ngo&agrave;i ra, Thường trực Tỉnh Đo&agrave;n Tr&agrave; Vinh c&ograve;n chỉ đạo c&aacute;c huyện, thị, th&agrave;nh Đo&agrave;n mỗi đơn vị th&agrave;nh lập 01 đội h&igrave;nh thanh ni&ecirc;n t&igrave;nh nguyện thực hiện c&aacute;c hoạt động t&igrave;nh nguyện v&agrave; hỗ trợ c&aacute;c ng&agrave;nh chức năng thực hiện ph&ograve;ng, chống dịch bệnh Covid-19.</p>\r\n\r\n<p>Th&aacute;ng Thanh ni&ecirc;n năm 2020 đ&atilde; tạo n&ecirc;n đợt thi đua s&ocirc;i nổi của tuổi trẻ tỉnh nh&agrave; bằng những h&agrave;nh động, c&ocirc;ng tr&igrave;nh, phần việc cụ thể ch&agrave;o mừng đại hội Đảng c&aacute;c cấp tiến tới Đại hội Đảng to&agrave;n quốc lần thứ XIII, kỷ niệm 89 năm ng&agrave;y th&agrave;nh lập Đo&agrave;n TNCS Hồ Ch&iacute; Minh (26/3/1931 &ndash; 26/3/2020).</p>', '2020-08-16', '2020-08-17', '2020-08-13 08:01:55', '2020-08-13 08:01:55');

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
(1, 'Cu tý', '10', 1, '2020-08-13 07:59:22', '2020-08-13 07:59:22'),
(2, 'Cu tèo', '14', 1, '2020-08-13 07:59:40', '2020-08-13 07:59:40');

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
(1, 'Bơi lội', 'kien-thuc-boi.jpg', 'Bơi lội', '<p><img src=\"https://lh3.googleusercontent.com/a-/AOh14GikCiYQiWKLFkcxZgSkWpclCEyWgRK5QDVJgAML=il\" /></p>\r\n\r\n<p>Dạy Học Bơi Đ&agrave; Nẵng</p>\r\n\r\n<p>26 ng&agrave;y trước</p>\r\n\r\n<p><img src=\"https://lh3.googleusercontent.com/p/AF1QipNGWOTSBs4K3HJXldRlEFhJUV9tWVpUbHIlvNCe=w610-h344-n-rw-no-v1\" /></p>\r\n\r\n<p>🏊&zwj;♂🏊&zwj;♂Thường xuy&ecirc;n chi&ecirc;u sinh c&aacute;c lớp học bơi cho trẻ em v&agrave; người lớn tại khu vực quận Sơn Tr&agrave; - Đ&agrave; Nẵng<br />\r\n‼‼Cam kết #Biết_bơi sau khi học‼‼<br />\r\n🏅🏅🏅Lứa tuổi:<br />\r\n- Lớp bơi trẻ em từ 6 tuổi trở l&ecirc;n<br />\r\n- Lớp bơi k&egrave;m ri&ecirc;ng<br />\r\n- Lớp bơi d&agrave;nh cho người lớn<br />\r\n- Lớp bơi n&acirc;ng cao<br />\r\n- Nhận dạy bơi tại nh&agrave; theo y&ecirc;u cầu<br />\r\n-----------------------------------------------<br />\r\n➡Đặc điểm:<br />\r\n+ Huấn luyện vi&ecirc;n chuy&ecirc;n nghiệp, nhiều năm kinh nghiệm<br />\r\n+ Bơi đ&uacute;ng kỹ thuật, hướng dẫn tận t&acirc;m<br />\r\n+ Hướng dẫn kĩ thuật ph&ograve;ng chống đuối nước, kĩ thuật thả nỗi<br />\r\n👉Địa điểm học :<br />\r\n🏚️ Hồ bơi Kh&aacute;ch Sạn Phước Mỹ An ➡Địa chỉ 264 Hồ Nghinh -Sơn Tr&agrave; - Đ&agrave; Nẵng Thời_Gian : S&aacute;ng 5h15-6h15 hoặc 6h15-7h15 . &zwj; ♂ Chiều từ 15h-16h &zwj;🏊&zwj;♂16h-17h &zwj;🏊&zwj;♂17h-18h&zwj;🏊&zwj;♂ 18h-19h hoặc 19h-20h * Muốn biết th&ecirc;m chi tiết Qu&yacute; kh&aacute;ch xin vui l&ograve;ng li&ecirc;n hệ điện thoại<br />\r\n☎0911303357 ☎ 0905323648. Ngo&agrave;i ra TT c&ograve;n trang bị phục vụ k&iacute;nh bơi v&agrave; mũ bơi</p>', 1000000, 20, 10.00, '2020-08-15', '2020-10-13', '2020-08-13 07:56:05', '2020-08-13 07:56:05'),
(2, 'Võ thuật cơ bản', 'vo.jpg', 'Học võ', '<p>Với mong muốn c&aacute;c em học sinh c&oacute; một s&acirc;n chơi bổ &iacute;ch, r&egrave;n luyện sức khỏe trong dịp h&egrave;, Đại đức Th&iacute;ch Thanh H&agrave;o, trụ tr&igrave; ch&ugrave;a B&iacute;ch Du, x&atilde; Th&aacute;i Thượng (Th&aacute;i Thụy) đ&atilde; phối hợp với Ban Văn h&oacute;a, Đo&agrave;n Thanh ni&ecirc;n x&atilde; mở lớp dạy v&otilde; miễn ph&iacute; cho học sinh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://media.baothaibinh.com.vn/upload/news/7_2019/84859__1564452082.jpg\" /></p>\r\n\r\n<p><em>Đại đức Th&iacute;ch Thanh H&agrave;o tổ chức lớp dạy v&otilde; miễn ph&iacute; cho thiếu ni&ecirc;n, nhi đồng x&atilde; Th&aacute;i Thượng (Th&aacute;i Thụy).</em></p>\r\n\r\n<p>D&ugrave; l&agrave; lần đầu tổ chức nhưng lớp học đ&atilde; thu h&uacute;t đ&ocirc;ng đảo học sinh trong x&atilde; tham gia.</p>\r\n\r\n<p>Cứ đến 17 giờ thứ ba, năm, bảy h&agrave;ng tuần, Phạm Đoan Trang, th&ocirc;n B&iacute;ch Du, x&atilde; Th&aacute;i Thượng lại c&ugrave;ng c&aacute;c bạn tới đ&igrave;nh, ch&ugrave;a l&agrave;ng B&iacute;ch Du để tập v&otilde;.&nbsp;</p>\r\n\r\n<p>Phạm Đoan Trang chia sẻ: Đến đ&acirc;y c&aacute;c em được thầy hướng dẫn c&aacute;c kỹ thuật cơ bản để c&oacute; thể tự vệ v&agrave; r&egrave;n luyện, n&acirc;ng cao sức khỏe. Đ&acirc;y thực sự l&agrave; lớp học bổ &iacute;ch đối với c&aacute;c em. Em rất cảm ơn ch&iacute;nh quyền địa phương v&agrave; nh&agrave; ch&ugrave;a đ&atilde; tạo cho ch&uacute;ng em một s&acirc;n chơi thiết thực, &yacute; nghĩa.</p>\r\n\r\n<p>Bắt đầu mở từ đầu th&aacute;ng 6, lớp dạy v&otilde; miễn ph&iacute; hiện c&oacute; gần 100 em, độ tuổi từ 7 - 15 tuổi theo học, trong đ&oacute; c&oacute; một số em mắc bệnh tự kỷ, hội chứng down.&nbsp;</p>\r\n\r\n<p>Đại đức Th&iacute;ch Thanh H&agrave;o đ&atilde; mời thầy gi&aacute;o Nguyễn Năng Khương, gi&aacute;o vi&ecirc;n Trường Tiểu học, THCS Thụy Hồng (Th&aacute;i Thụy) về trực tiếp hướng dẫn, dạy v&otilde; cho c&aacute;c em. Đại đức Th&iacute;ch Thanh H&agrave;o chia sẻ: Ai l&agrave;m việc thiện cũng đều mong muốn việc l&agrave;m của m&igrave;nh sẽ mang lại lợi &iacute;ch thiết thực cho cộng đồng. Trước t&igrave;nh trạng bạo lực học đường, đuối nước... t&ocirc;i nghĩ cần l&agrave;m g&igrave; đ&oacute; cho c&aacute;c ch&aacute;u. Được sự đồng &yacute; của ch&iacute;nh quyền địa phương, t&ocirc;i quyết định mở lớp dạy v&otilde; tại ch&ugrave;a nhằm gi&uacute;p c&aacute;c ch&aacute;u c&oacute; một s&acirc;n chơi l&agrave;nh mạnh trong 3 th&aacute;ng h&egrave;. Học v&otilde;, ngo&agrave;i việc r&egrave;n luyện sức khỏe, c&aacute;c ch&aacute;u c&ograve;n được vui chơi, gi&aacute;o dục về c&aacute;ch ứng xử v&agrave; kỹ năng bảo vệ m&igrave;nh. Việc tổ chức lớp học tại ch&ugrave;a, trong kh&ocirc;ng gian thanh tịnh, ch&uacute;ng t&ocirc;i cũng mong muốn c&aacute;c ch&aacute;u giảm bớt đi sự hiếu động, tinh nghịch của tuổi học tr&ograve;, sống hiếu thuận, lễ ph&eacute;p hơn.</p>\r\n\r\n<p><img src=\"https://media.baothaibinh.com.vn/upload/news/7_2019/e0069c4d9362e4c0d4056fbf46781226.jpg\" /></p>\r\n\r\n<p><em>Lớp dạy v&otilde; thu h&uacute;t đ&ocirc;ng đảo học sinh x&atilde; Th&aacute;i Thượng (Th&aacute;i Thụy) tham gia.</em></p>\r\n\r\n<p>Hai tiếng mỗi ng&agrave;y, tham gia lớp học v&otilde; miễn ph&iacute; c&aacute;c em được dạy c&aacute;c kỹ năng cơ bản v&agrave; 15 đ&ograve;n tự vệ của m&ocirc;n v&otilde; Vovinam. Đ&acirc;y l&agrave; m&ocirc;n v&otilde; ph&aacute;t triển tr&ecirc;n m&ocirc;n vật cổ truyền của d&acirc;n tộc, ph&ugrave; hợp với v&oacute;c d&aacute;ng, thể lực của người Việt Nam. D&ugrave; miễn ph&iacute; nhưng lớp học c&oacute; những quy định rất nghi&ecirc;m t&uacute;c như: kh&ocirc;ng đến muộn, kh&ocirc;ng n&oacute;i chuyện ri&ecirc;ng khi luyện tập... V&igrave; thế, ai cũng &yacute; thức đến đ&uacute;ng giờ v&agrave; luyện tập chăm chỉ.</p>\r\n\r\n<p>&Ocirc;ng Nguyễn Văn Viễn, c&aacute;n bộ văn h&oacute;a x&atilde; Th&aacute;i Thượng cho biết: Tuy l&agrave; năm đầu ti&ecirc;n tổ chức nhưng lớp đ&atilde; thu h&uacute;t đ&ocirc;ng đảo c&aacute;c em học sinh tham gia, trong đ&oacute; c&oacute; nhiều học sinh nữ. Kh&ocirc;ng chỉ tạo s&acirc;n chơi bổ &iacute;ch gi&uacute;p c&aacute;c em trang bị kỹ năng cần thiết để tự vệ v&agrave; r&egrave;n luyện sức khỏe, lớp c&ograve;n g&oacute;p phần th&uacute;c đẩy phong tr&agrave;o luyện tập thể dục thể thao trong lứa tuổi thiếu ni&ecirc;n, nhi đồng tại địa phương. &nbsp;</p>\r\n\r\n<p>Luyện tập hăng say, nghi&ecirc;m t&uacute;c với những động t&aacute;c mạnh mẽ v&agrave; dứt kho&aacute;t song kh&ocirc;ng bạn nhỏ n&agrave;o cho thấy sự mệt mỏi. Niềm đam m&ecirc; với v&otilde; cổ truyền hiện r&otilde; tr&ecirc;n từng gương mặt trẻ thơ. Ai cũng h&agrave;o hứng khi mỗi ng&agrave;y được biết th&ecirc;m một động t&aacute;c mới. Thấy con mạnh khỏe, nhanh nhẹn v&agrave; tự tin hơn khi đến lớp, c&aacute;c bậc phụ huynh rất y&ecirc;n t&acirc;m v&agrave; phấn khởi.&nbsp;</p>\r\n\r\n<p>Đại đức Th&iacute;ch Thanh H&agrave;o cho biết th&ecirc;m: Cho đến nay, lớp học kh&aacute; th&agrave;nh c&ocirc;ng khi số lượng học sinh tham gia đ&ocirc;ng. C&aacute;c ch&aacute;u đến đ&uacute;ng giờ v&agrave; luyện tập rất chăm chỉ. Nếu nhận được phản hồi tốt của dư luận, t&ocirc;i sẽ tiếp tục duy tr&igrave; lớp học sau 3 th&aacute;ng h&egrave;.</p>\r\n\r\n<p>Ngo&agrave;i lớp học ở x&atilde; Th&aacute;i Thượng, hiện nay, Đại đức Th&iacute;ch Thanh H&agrave;o c&ograve;n tổ chức lớp dạy v&otilde; miễn ph&iacute; cho c&aacute;c em học sinh tại ch&ugrave;a Chi&ecirc;u Ph&uacute;c, thị trấn Di&ecirc;m Điền với gần 80 em tham gia. Từ việc l&agrave;m nhỏ nhưng &yacute; nghĩa của ch&iacute;nh quyền địa phương v&agrave; Đại đức Th&iacute;ch Thanh H&agrave;o, mong rằng sẽ c&oacute; th&ecirc;m nhiều lớp học kh&aacute;c ra đời để c&aacute;c em nhỏ được vui chơi, học tập l&agrave;nh mạnh, ph&aacute;t triển cả thể chất lẫn tinh thần.</p>', 1000000, 20, 10.00, '2020-08-13', '2020-12-13', '2020-08-13 07:58:31', '2020-08-13 07:58:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_child`
--

CREATE TABLE `course_child` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course_child`
--

INSERT INTO `course_child` (`id`, `child_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 2, NULL, NULL);

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
(9, '2020_08_11_030614_create_childs_table', 1),
(10, '2020_08_11_030651_create_course_childs_table', 1),
(11, '2020_08_13_144104_create_appointments_table', 1);

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
(1, 'Bùi Thế Toàn', '22 Thiên Đình', '0399497788', 'toanbt@gmail.com', 2, '2020-08-13 07:51:31', '2020-08-13 07:51:31');

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
(1, 'create_user', 'Create user', '2020-08-13 07:50:10', '2020-08-13 07:50:10'),
(2, 'edit_user', 'Edit user', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(3, 'view_user', 'View user', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(4, 'detail_user', 'Detail user', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(5, 'delete_user', 'Delete user', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(6, 'create_role', 'Create role', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(7, 'edit_role', 'Edit role', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(8, 'view_role', 'View role', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(9, 'detail_role', 'Detail role', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(10, 'delete_role', 'Delete role', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(11, 'create_child', 'Create child', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(12, 'edit_child', 'Edit child', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(13, 'view_child', 'View child', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(14, 'detail_child', 'Detail child', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(15, 'delete_child', 'Delete child', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(16, 'create_course', 'Create course', '2020-08-13 07:50:11', '2020-08-13 07:50:11'),
(17, 'edit_course', 'Edit course', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(18, 'view_course', 'View course', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(19, 'detail_course', 'Detail course', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(20, 'delete_course', 'Delete course', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(21, 'create_active', 'Create active', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(22, 'edit_active', 'Edit active', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(23, 'view_active', 'View active', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(24, 'detail_active', 'Detail active', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(25, 'delete_active', 'Delete active', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(26, 'create_appointment', 'Create appointment', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(27, 'edit_appointment', 'Edit appointment', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(28, 'view_appointment', 'View appointment', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(29, 'detail_appointment', 'Detail appointment', '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(30, 'delete_appointment', 'Delete appointment', '2020-08-13 07:50:12', '2020-08-13 07:50:12');

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
(1, 1, 1, '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(2, 2, 1, '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
(3, 3, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(4, 4, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(5, 5, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(6, 6, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(7, 7, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(8, 8, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(9, 9, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(10, 10, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(11, 11, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(12, 12, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(13, 13, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(14, 14, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(15, 15, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(16, 16, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(17, 17, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(18, 18, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(19, 19, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(20, 20, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(21, 21, 1, '2020-08-13 07:50:13', '2020-08-13 07:50:13'),
(22, 22, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(23, 23, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(24, 24, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(25, 25, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(26, 26, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(27, 27, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(28, 28, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(29, 29, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14'),
(30, 30, 1, '2020-08-13 07:50:14', '2020-08-13 07:50:14');

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
(1, 'ROLE_ADMIN', 'Administrator', '2020-08-13 07:50:10', '2020-08-13 07:50:10'),
(2, 'ROLE_CUSTOMER', 'Customer', '2020-08-13 07:50:10', '2020-08-13 07:50:10');

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
(1, 1, 1, '2020-08-13 07:50:12', '2020-08-13 07:50:12'),
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
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$xjEaKK43UGsm35lss/jBqOSwvU0ILsfVmQcJJLx1tZxC6PawScbvK', NULL, '2020-08-13 07:50:10', '2020-08-13 07:50:10'),
(2, 'toanbt', 'toanbt@gmail.com', NULL, '$2y$10$4.7Dws34enCzZwcF5EM96ONzg0A6t3dJ1Idp.l/W56k6DzQMBlsVi', 'k0JvIBna2idAA2QAWsPBOkYmZvQlOErCxYviFPTw7xTpnOiMjqkoJ2oOQ6nW', '2020-08-13 07:51:31', '2020-08-13 07:51:31');

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
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course_child`
--
ALTER TABLE `course_child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_child_child_id_foreign` (`child_id`),
  ADD KEY `course_child_course_id_foreign` (`course_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `course_child`
--
ALTER TABLE `course_child`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `parents`
--
ALTER TABLE `parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `permission_roles`
--
ALTER TABLE `permission_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- Các ràng buộc cho bảng `course_child`
--
ALTER TABLE `course_child`
  ADD CONSTRAINT `course_child_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `childs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_child_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
