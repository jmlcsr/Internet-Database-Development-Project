/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 80034
 Source Host           : localhost:3306
 Source Schema         : yii

 Target Server Type    : MySQL
 Target Server Version : 80034
 File Encoding         : 65001

 Date: 21/12/2025 22:05:25

 
*/

-- 创建数据库（如果不存在）
CREATE DATABASE IF NOT EXISTS `yii` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- 选择数据库
USE `yii`;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for assignment
-- ----------------------------
DROP TABLE IF EXISTS `assignment`;
CREATE TABLE `assignment`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '作业标题',
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '物理文件名',
  `file_type` enum('team','personal') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'team' COMMENT '存放目录(team/personal)',
  `author` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '提交人',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '作业下载索引表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of assignment
-- ----------------------------
INSERT INTO `assignment` VALUES (1, '2311383_张得涵_作业1.rar', '2311383_张得涵_作业1.rar', 'personal', '张得涵');
INSERT INTO `assignment` VALUES (2, '2311383_张得涵_作业2.rar', '2311383_张得涵_作业1.rar', 'personal', '张得涵');
INSERT INTO `assignment` VALUES (3, '2311383_张得涵_作业3.rar', '2311383_张得涵_作业3.rar', 'personal', '张得涵');
INSERT INTO `assignment` VALUES (4, '占位符小组_设计文档(2311383_2311062_2310412).pdf', '占位符小组_设计文档(2311383_2311062_2310412).pdf', 'team', '张得涵');
INSERT INTO `assignment` VALUES (5, '占位符小组_实现文档(2311383_2311062_2310412).pdf', '占位符小组_实现文档(2311383_2311062_2310412).pdf', 'team', '张得涵');
INSERT INTO `assignment` VALUES (6, '占位符小组_需求文档(2311383_2311062_2310412).pdf', '占位符小组_需求文档(2311383_2311062_2310412).pdf', 'team', '张得涵');
INSERT INTO `assignment` VALUES (7, '占位符⼩组_部署⽂档(2311383_2311062_2310412).pdf', '占位符⼩组_部署⽂档(2311383_2311062_2310412).pdf', 'team', '刘孙延');
INSERT INTO `assignment` VALUES (8, '占位符⼩组_⽤户⼿册(2311383_2311062_2310412).pdf', '占位符⼩组_⽤户⼿册(2311383_2311062_2310412).pdf', 'team', '刘孙延');
INSERT INTO `assignment` VALUES (9, '作业1(2310412_郝普瑞).zip', '作业1(2310412_郝普瑞).zip', 'personal', '郝普瑞');
INSERT INTO `assignment` VALUES (10, '作业2(2310412_郝普瑞).zip', '作业2(2310412_郝普瑞).zip', 'personal', '郝普瑞');
INSERT INTO `assignment` VALUES (11, '作业3(2310412_郝普瑞).zip', '作业3(2310412_郝普瑞).zip', 'personal', '郝普瑞');
INSERT INTO `assignment` VALUES (12, '作业1（2311062_刘孙延）.zip', '作业1（2311062_刘孙延）.zip', 'personal', '刘孙延');
INSERT INTO `assignment` VALUES (13, '作业2（2311062_刘孙延）.zip', '作业2（2311062_刘孙延）.zip', 'personal', '刘孙延');
INSERT INTO `assignment` VALUES (14, '作业3（2311062_刘孙延）.zip', '作业3（2311062_刘孙延）.zip', 'personal', '刘孙延');
INSERT INTO `assignment` VALUES (15, '占位符⼩组_录屏讲解(2311383_2311062_2310412).mp4', '占位符⼩组_录屏讲解(2311383_2311062_2310412).mp4', 'team', '郝普瑞');
INSERT INTO `assignment` VALUES (16, '占位符⼩组_项目展示(2311383_2311062_2310412).pptx', '占位符⼩组_项目展示(2311383_2311062_2310412).pptx', 'team', '郝普瑞');

-- ----------------------------
-- Table structure for battle
-- ----------------------------
DROP TABLE IF EXISTS `battle`;
CREATE TABLE `battle`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '战役名称',
  `location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '发生地点',
  `date_period` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '时间跨度',
  `result` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '战役结果',
  `casualty_count` int NULL DEFAULT 0 COMMENT '伤亡数据',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '重大战役录' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of battle
-- ----------------------------
INSERT INTO `battle` VALUES (1, '淞沪会战', '上海及周边地区（长江口沿岸）', '1937年8月13日 — 1937年11月26日', '中国军队在付出约30万人伤亡的巨大代价后，被迫撤离上海，上海失陷。此役彻底粉碎了日本“三个月灭亡中国”的狂妄计划，展现了中国人民的抗战决心，吸引了国际社会关注，并促使中国沿海工业内迁，为长期抗战保存了实力。', 300000);
INSERT INTO `battle` VALUES (2, '太原会战（含平型关大捷）', '山西省北部及东部（重点在平型关、忻口、娘子关等地）', '1937年9月11日 — 1937年11月8日', '中国军队未能守住太原，华北主要城市与交通线沦陷。但此役中的平型关大捷是全国抗战以来中国军队取得的第一个歼灭战胜利，极大鼓舞了全国军民士气，使共产党领导的八路军威望大增。', 100000);
INSERT INTO `battle` VALUES (3, '徐州会战（含台儿庄大捷）', '江苏省北部、山东省南部、安徽省北部，以徐州为中心', '1938年1月 — 1938年5月', '尽管最终战略要地徐州失守，但台儿庄大捷是正面战场在抗战初期取得的最重大胜利，打击了日军气焰，迟滞了其进攻步伐，为部署接下来的武汉会战争取了时间。', 100000);
INSERT INTO `battle` VALUES (4, '武汉会战', '以武汉为中心，遍及安徽、河南、江西、湖北四省广大地区', '1938年6月 — 1938年10月', '中国军队以巨大牺牲消耗了日军有生力量后有序撤离。此役规模空前，使日军战略进攻达到顶点，其国力军力已无力支撑更大规模攻势。抗日战争从此由战略防御阶段转入战略相持阶段。', 400000);
INSERT INTO `battle` VALUES (5, '百团大战', '华北地区（主要集中于正太、同蒲、平汉、津浦等铁路干线）', '1940年8月20日 — 1941年1月24日', '八路军发起的这场大规模主动进攻战役，沉重打击了日军的“囚笼政策”和华北的据点、交通线。它有力地证明了共产党领导下的敌后战场是抗战的中流砥柱，极大地振奋了全国军民争取抗战胜利的信心。', 17000);

-- ----------------------------
-- Table structure for document_category
-- ----------------------------
DROP TABLE IF EXISTS `document_category`;
CREATE TABLE `document_category`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '文献类别',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '史料文献分类表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of document_category
-- ----------------------------
INSERT INTO `document_category` VALUES (1, '纲领文献');
INSERT INTO `document_category` VALUES (2, '军事档案');
INSERT INTO `document_category` VALUES (3, '国际文件');
INSERT INTO `document_category` VALUES (4, '纪实证言');

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '访客昵称',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '留言感悟',
  `created_at` datetime NULL DEFAULT NULL COMMENT '留言时间',
  `is_audit` tinyint(1) NULL DEFAULT 0 COMMENT '是否审核通过',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '访客留言互动表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES (1, 'VignaChu', '测试用，占位符', '2025-12-21 20:58:46', 1);

-- ----------------------------
-- Table structure for hero
-- ----------------------------
DROP TABLE IF EXISTS `hero`;
CREATE TABLE `hero`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '英雄姓名',
  `lifetime` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '生卒年',
  `rank` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '职务/军衔',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '英勇事迹',
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '照片存放路径',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '抗战英雄志' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hero
-- ----------------------------
INSERT INTO `hero` VALUES (1, '左权', '1905年-1942年', '八路军副参谋长', '中国工农红军和八路军高级将领，无产阶级革命家、军事家。抗日战争爆发后，协助指挥八路军开赴华北抗日前线，参与指挥了晋东南反“九路围攻”、百团大战、黄崖洞保卫战等战役。1942年5月，在山西省辽县（今左权县）十字岭指挥部队掩护中共中央北方局和八路军总部突围时，不幸壮烈殉国，是八路军在抗日战场上牺牲的最高级别指挥员。他军事理论造诣深厚，撰写了《论坚持华北抗战》等多篇军事著作。', 'pic/heroes/ZuoQuan.png');
INSERT INTO `hero` VALUES (2, '张自忠', '1891年-1940年', '第五战区右翼集团军兼第三十三集团军总司令', '著名抗日将领、民族英雄。1937年至1940年先后参与临沂保卫战、徐州会战、武汉会战、随枣会战与枣宜会战等。1940年5月在襄阳与日军战斗中，身先士卒，浴血督战，不幸壮烈牺牲。他是第二次世界大战同盟国阵营中阵亡的最高级别将领。牺牲后，延安各界为其举行追悼会，毛泽东、周恩来等人亲笔题写挽词。2014年被列入民政部公布的第一批300名著名抗日英烈和英雄群体名录。', 'pic/heroes/ZhangZizhong.png');
INSERT INTO `hero` VALUES (3, '赵一曼', '1905年-1936年', '东北抗日联军第三军二团政委', '著名的抗日民族女英雄。1935年担任东北抗日联军团政委，在与日伪军作战时受伤被俘。在狱中，她受尽酷刑，坚贞不屈，严守抗联秘密。1936年8月2日，在珠河县（今尚志市）英勇就义。临刑前，她给幼子写下感人至深的遗书：“宁儿啊！赶快成人，来安慰你地下的母亲！在你长大成人之后，希望不要忘记你的母亲是为国而牺牲的！”她的英勇事迹成为中国人民抗击外侮的精神象征。', 'pic/heroes/ZhaoYiman.png');
INSERT INTO `hero` VALUES (4, '成本华', '1914年-1938年', '安徽省和县抗日人民自卫军女战士', '1938年初，日军入侵安徽省和县，成本华与战友们奋勇抵抗，最终不幸被俘。就义前，她双手交叉抱在胸前，轻蔑地微笑着，从容面对日军镜头和刺刀，留下了那幅著名的“最美抗日女兵”肖像。这张照片由日军随军记者拍摄，后因展现了中国人的不屈气节而广为流传。她牺牲时年仅24岁，用生命和笑容诠释了中华民族宁死不屈的尊严。', 'pic/heroes/ChengBenhua.png');

-- ----------------------------
-- Table structure for historical_document
-- ----------------------------
DROP TABLE IF EXISTS `historical_document`;
CREATE TABLE `historical_document`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL COMMENT '所属分类ID',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '文献标题',
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '史料全文',
  `source` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '史料来源',
  `period` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '所属时期',
  `is_featured` tinyint(1) NULL DEFAULT 0 COMMENT '是否推荐到首页',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '抗战史料档案表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of historical_document
-- ----------------------------
INSERT INTO `historical_document` VALUES (1, 1, '《为抗日救国告全体同胞书》（《八一宣言》）', '国内外工农军政商学各界男女同胞们！　\r\n　　日本帝国主义加紧对我们进攻，南京卖国政府步步投降，我北方各省又继东北四省之后而实际沦亡了！　\r\n\r\n　　有数千年文化历史的平津，有无限富源的直、鲁、晋、豫各省，有最重要战略意义的热、察、绥区域，有全国政治经济命脉的北宁、平汉、津浦、平绥等铁路，现在实际上都完全在日寇军力控制之下。关东贼军司令部正在积极实行成立所谓“蒙古国”和“华北国”的计划。自民国二十年“九一　八”事变以来，由东三省而热河，由热河而长城要塞，由长城而“滦东非战区”，由非战区而实际占领河北、察、绥和北方各省，不到四年，差不多半壁山河，已经被日寇占领和侵袭了。田中奏折所预定的完全灭亡我国的毒计，正着实行，长此下去，眼看长江和珠江流域及其它各地，均将逐渐被日寇所吞蚀。我五千年古国将完全变成被征服地，四万万同胞将都变成亡国奴。　\r\n\r\n　　近年来，我国家我民族已处在千钧一发的生死关头。抗日则生，不抗日则死，抗日救国，已成为每个同胞的神圣天职！　\r\n\r\n　　然而最痛心的，在我们伟大民族中间，却发现着少数人面兽心的败类！蒋介石，阎锡山，张学良等卖国贼，黄郛，杨永泰，王揖唐，张群等老汉奸，数年以来，以“不抵抗”政策出卖我国领土，以“逆来顺受”的主张接受日寇一切要求，以“攘外必先安内”的武断宣传来进行内战和压迫一切反帝运动，以“十年生聚”、“十年教养”、“准备复仇”等骗人口号来制止人民抗日救国行动，以“等待世界第二次大战来了再说”的狡计来迫使我国人民坐以待亡。而最近以来，汉奸卖国贼等在“中日亲善”，“中日合作”和“大亚细亚主义”等口号之下所作的降日卖国之露骨无耻行为，简直是古今中外未有之奇闻！日寇要求撤退于学忠、宋哲元等军队，这些军队便立刻奉令南下西开去进行内战了；日寇要求撤退某些军政长官，某些军政长官便立刻被撤职了；日寇要求河北省政府迁出天津，省政府便立刻搬到保定了；日寇要求封禁某些报章杂志，那些报章杂志便立刻被封禁了；日寇要求惩办“新生”等杂志主笔和新闻记者，“新生”主笔和许多记者便立刻被逮捕监禁了；日寇要求中国政府实行奴化教育，蒋贼便立刻焚书坑儒了；日寇要求中国聘请日本顾问，蒋贼的军政机关便立刻开门揖盗了；甚至日寇要求解散国民党党部，北方厦门等地国民党党部便立刻奉令解散了；日寇要求解散蓝衣社组织，蓝衣社北方领袖曾扩情、蒋孝先等便闻风潜逃了。　\r\n\r\n　　中国苏维埃政府和共产党认为日寇和汉奸卖国贼对我国这些行动，是中华民族的无上耻辱！苏维埃政府和共产党郑重宣言：我们不仅对于日寇对我国的领土侵略和内政干涉，表示激烈的反抗；就是对于日寇提出解散国民党党部和蓝衣社组织底要求，也表示坚决的抗议。在共产党及苏维埃政府看来：一切中国人的事，应由中国人自己解决，无论国民党和蓝衣社卖国殃民的罪恶如何滔天，但其应否存废问题，日寇绝无置喙的余地。　\r\n\r\n　　领土一省又一省地被人侵占，人民千万又千万地被人奴役，城村一处又一处地被人血洗，侨胞一批又一批地被人驱逐，一切内政外交处处被人干涉，这还能算什么国家？！这还算什么民族？！　\r\n\r\n　　同胞们！中国是我们的祖国！中国民族就是我们全体同胞！我们能坐视国亡族灭而不起来救国自救吗？　\r\n\r\n　　不能！绝对不能！阿比西尼亚以八百万人民的国家，尚能对意大利帝国主义准备作英勇的武装反抗，以保卫自己的领土和人民；难道我们四万万人民的泱泱大国，就能这样束手待毙吗？苏维埃政府和共产党深切相信：除极少数汉奸卖国贼愿作李完用、郑孝胥、张景惠、溥仪第二去靦颜事仇而外，我绝大多数工农军政商学各界同胞，绝不甘心作日寇的牛马奴隶。苏维埃政府对日宣战，红军再三提议与各军队共同抗日，红军北上抗日先遣队艰苦奋斗，十九路军及民众的淞沪抗日血战，察哈尔、长城及滦东各地军民英勇杀贼，福建人民政府接受红军提议联合抗日，罗登贤、徐名鸿、吉鸿昌、邓铁梅、伯阳、童长荣、潘洪生、史灿堂、瞿秋白、孙永勤、方志敏等民族英雄为救国而捐躯，刘崇武、田汉、杜重远等爱国志士为抗日而入狱，蔡廷锴、蒋光鼐、翁照垣、陈铭枢、方振武等抗日部队艰苦斗争，宋庆龄、何香凝、李杜、马相伯等数千人发表中华民族对日作战基本纲领，数年来我工农商学各界同胞为抗日而进行排货、罢工、罢市、罢课、示威等救国运动，尤其是我东北数十万武装反日战士，在杨靖宇、赵尚志、王德泰、李廷禄、周保中、谢文东、吴义成、李华堂等民族英雄领导之下，前仆后继的英勇作战，在在都表现我民族救亡图存的伟大精神，在在都证明我民族抗日救国的必然胜利。到现在，我同胞抗日救国事业之所以还未得到应有胜利的原因，一方面是由于日寇蒋贼的内外夹攻，另方面是由于各种抗日反蒋势力互相之间存在有各种隔阂和误会，以致未能团结一致。\r\n\r\n　　因此，今当我亡国灭种大祸迫在眉睫之时，共产党和苏维埃政府再一次向全体同胞呼吁：无论各党派间在过去和现在有任何政见和利害的不同，无论各界同胞间有任何意见上或利益上的差异，无论各军队间过去和现在有任何敌对行动，大家都应当有“兄弟阋于墙外御其侮”的真诚觉悟，首先大家都应当停止内战，以便集中一切国力（人力、物力、财力、武力等）去为抗日救国的神圣事业而奋斗。苏维埃政府和共产党特再一次郑重宣言：只要国民党军队停止进攻苏区行动，只要任何部队实行对日抗战，不管过去和现在他们与红军之间任何旧仇宿怨，不管他们与红军之间在对内问题上有何分歧，红军不仅立刻对之停止敌对行为，而且愿意与之亲密携手共同救国。此外，苏维埃政府和共产党现在更进一步地恳切号召：一切不愿当亡国奴的同胞们！　\r\n\r\n　　一切有爱国天良的军官和士兵弟兄们！　\r\n\r\n　　一切愿意参加抗日救国神圣事业的党派和团体的同志们！　\r\n\r\n　　国民党和蓝衣社中一切有民族意识的热血青年们！　\r\n\r\n　　一切关心祖国的侨胞们！　\r\n\r\n　　中国境内一切被压迫民族（蒙、回、韩、藏、苗、瑶、黎、番等）的兄弟们！　\r\n\r\n　　大家起来！冲破日寇蒋贼的万重压迫，勇敢地：与苏维埃政府和东北各地抗日政府一起，组织全中国统一的国防政府；与红军和东北人民革命军及各种反日义勇军一块，组织全中国统一的抗日联军。　\r\n\r\n　　苏维埃政府和共产党愿意作成立这种国防政府的发起人，苏维埃政府和共产党愿意立刻与中国一切愿意参加抗日救国事业的各党派，各团体（工会，农会，学生会，商会，教育会，新闻记者联合会，教职员联合会，同乡会，致公堂，民族武装自卫会，反日会，救国会等等），各名流学者，政治家，以及一切地方军政机关，进行谈判共同成立国防政府问题；谈判结果所成立的国防政府，应该作为救亡图存的临时领导机关，这种国防政府，应当设法召集真正代表全体同胞（由工农军政商学各界，一切愿意抗日救国的党派和团体，以及国外侨胞和中国境内各民族，在民主条件下选出的代表）的代表机关，以便更具体地讨论关于抗日救国的各种问题。苏维埃政府和共产党绝对尽力赞助这一全民代表机关的召集，并绝对执行这一机关的决议，因为苏维埃政府和共产党是绝对尊重人民公意的政府和政党。　\r\n\r\n　　国防政府的主要责任在于抗日救国，其行政方针应包括下列各点：　\r\n　　（一）抗日救国，收复失地；　\r\n　　（二）救灾治水，安定民生；　\r\n　　（三）没收日寇在华一切财产，充作对日战费；　\r\n　　（四）没收汉奸卖国贼财产、粮食、土地，交给贫苦同胞和抗日战士享用；（五）废除苛捐杂税，整理财政金融，发展工农商业；　\r\n　　（六）加薪加饷，改良工农军学各界生活；　\r\n　　（七）实行民主自由，释放一切政治犯；　\r\n　　（八）实行免费教育，安置失业青年；　\r\n　　（九）实行中国境内各民族一律平等政策，保护侨胞在国内外生命、财产、居住和营业的自由；　\r\n　　（十）联合一切反对帝国主义的民众（日本国内劳苦民众，高丽，台湾等民族）作友军，联合一切同情中国民族解放运动的民族和国家作同盟，与一切对中国民众反日解放战争守善意中立的民族和国家建立友谊关系。　\r\n\r\n　　抗日联军应由一切愿意抗日的部队合组而成，在国防政府领导之下，组成统一的抗日联军总司令部。这种总司令部或由各军抗日长官及士兵选出代表组成，或由其他形式组成，也由各方代表及全体人民公意而定。红军绝对首先加入联军，以尽抗日救国的天职。　\r\n\r\n　　为的使国防政府真能担当起国防重任，为的使抗日联军真能担负起抗日重责，共产党和苏维埃政府号召全体同胞：有钱的出钱，有枪的出枪，有粮的出粮，有力的出力，有专门技能的供献专门技能，以便我全体同胞总动员，并用一切新旧式武器，武装起千百万民众来。共产党和苏维埃政府坚决相信：如果我们四万万同胞有统一的国防政府作领导，有统一的抗日联军作先锋，有千百万民众作后备，有无数万东方的和全世界的无产阶级和民众作声援，一定能战胜内受人民反抗、外受列强敌视的日本帝国主义！　\r\n\r\n　　同胞们起来！　\r\n\r\n　　为祖国生命而战！　\r\n\r\n　　为民族生存而战！　\r\n\r\n　　为国家独立而战！　\r\n\r\n　　为领土完整而战！　\r\n\r\n　　为人权自由而战！　\r\n\r\n　　大中华民族抗日救国大团结万岁！　\r\n\r\n\r\n　　中国苏维埃中央政府　\r\n\r\n　　中国共产党中央委员会　\r\n\r\n', '中共中央党史和文献研究院', '局部抗战时期', 1);
INSERT INTO `historical_document` VALUES (2, 1, '《中共中央为公布国共合作宣言》', '解放报记者以共产党中央最近由南京中央社广播发表之宣言，影响中囯时局甚为广大，特请共产党中央负责人发表意见如下：\r\n\r\n　　“关于囯共两党联合救国之伟大事业，己在九月二十二日经过中央通讯社所发表的中国共产党宣言及九月二十三日该社继续发表的蒋介石氏的谈话，建立起必要的基础了。\r\n\r\n　　蒋氏的谈话，指出了团结教囯的深切意义，发出了与全国国民彻底更始的诺言，承认了共产党在全囯的合法地位，这是值得赞许的。但是在蒋氏谈话中尚没有抛弃国民党自大主义的精神，尚没有能坦白的承认囯民党过去十年来在民族危机中自己所应负的责任，不免遗憾！共产党的宣言及蒋氏的谈话，宣布了中囯抗日民族统一战线的成功。今后的问题，是如何实行民主政治，改善人民生活，启发全国人民的抗日运动，用以极大的增强抗日战争的力量。这个宣言是一个公布囯共合作的宣言，本应早日发表，还是在七月四日起草，七月十五日就交付囯民党了的，可是推迟了两个多月才发表，然而宣言的基本精神是没有损失的，这个宣言不但将成为两党团结的方针，而且将成为全国人民大团结的根本方针。中华民族之复兴，日本帝国主义之打倒，将于今后的两党团结与全囯团结得到其基础”。宣言全文如下：\r\n\r\n　　亲爱的同胞们：\r\n\r\n　　中国共产党中央委员会谨以极大的热忱向我全国父老兄弟诸姑姊妹宣言：当此国难极端严重民族生命存亡绝续之时，我们为着挽救祖国的危亡，在和平统一团结御侮的基础上，已经与中国国民党获得了谅解，而共赴国难了，这对于我们伟大的中华民族前途有着怎样重大的意义啊！因为大家都知道，在民族生命危急万状的现在，只有我们民族内部的团结，才能战胜日本帝国主义的侵略。现在民族团结的基础已经定下了，我们民族独立自由解放的前提也已创设了，中共中央特为我们民族的光明灿烂的前途庆贺。\r\n\r\n　　不过我们知道，要把这个民族的光辉前途变为现实的独立自由幸福的新中国，仍需要全国同胞，每一个热血的炎黄子孙，坚忍不拔地努力奋斗。中国共产党愿当此时机，向全国同胞提出我们奋斗之总的目标，这就是：\r\n\r\n　　（一）争取中华民族之独立自由与解放。首先须切实地迅速地准备与发动民族革命抗战，以收复失地和恢复领土主权之完整。\r\n\r\n　　（二）实现民权政治，召开国民大会，以制定宪法与规定救国方针。\r\n\r\n　　（三）实现中国人民之幸福与愉快的生活。首先须切实救济灾荒，安定民生，发展国防经济，解除人民痛苦与改善人民生活。\r\n\r\n　　凡此诸项，均为中国的急需，以此悬为奋斗之鹄的，我们相信必能获得全国同胞之热烈的赞助。中共愿在这个总纲领的目标下，与全国同胞手携手地一致努力。\r\n\r\n　　中共深切知道，在实现这个崇高目标的前进路上，须要克服许多的障碍和困难，首先将遇到日本帝国主义的阻碍和破坏。为着取消敌人的阴谋之借口，为着解除一切善意的怀疑者之误会，中国共产党中央委员会，有披沥自己对于民族解放事业的赤忱之必要。因此，中共中央再郑重向全国宣言：\r\n\r\n　　一、孙中山先生的三民主义为中国今日之必需，本党愿为其彻底的实现而奋斗。\r\n\r\n　　二、取消一切推翻国民党政权的暴动政策及赤化运动，停止以暴力没收地主土地的政策。\r\n\r\n　　三、取消现在的苏维埃政府，实行民权政治，以期全国政权之统一。\r\n\r\n　　四、取消红军名义及番号，改编为国民革命军，受国民政府军事委员会之统辖，并待命出动，担任抗日前线之职责。\r\n\r\n　　亲爱的同胞们！本党这种光明磊落大公无私与委曲求全的态度，早已向全国同胞在言论行动上明白表示出来，并且已获得同胞们的赞许。现在为求得与国民党的精诚团结，巩固全国的和平统一，实行抗日的民族革命战争，我们准备把这些诺言中在形式上尚未实行的部分，如苏区取消，红军改编等，立即实行，以便用统一团结的全国力量，抵抗外敌的侵略。\r\n\r\n　　寇深矣！祸亟矣！同胞们，起来，一致的团结啊！我们伟大的悠久的中华民族是不可屈服的。起来，为巩固民族的团结而奋斗！为推翻日本帝国主义的压迫而奋斗！胜利是属于中华民族的！抗日战争胜利万岁！\r\n\r\n　　独立自由幸福的新中国万岁！\r\n\r\n　　中国共产党中央委员会', '人民网·中国共产党新闻网', '全面抗战初期', 1);
INSERT INTO `historical_document` VALUES (3, 3, '《波茨坦公告》', '中英美三国波茨坦宣言\r\n\r\n——一九四五年七月二十六日发表\r\n\r\n　　（一）余等美国总统、中国国民政府主席及英国首相，代表余等亿万国民，业经会商并同意对日本提出劝告，予以一机会以向三国无条件投降，免日本全体人民遭受战争之惨祸。\r\n\r\n　　（二）三国陆海空部队已增强多倍，其由西方调来之军队及空军即将予日本以最后之打击。彼等之武力受所有联合国之决心之支持，对日本全面作战，不至其停止抵抗不止。\r\n\r\n　　（三）德国无效果及无意识抵抗全世界自由人民之力量所得之结果彰彰在前，可为日本人民之殷鉴。此种力量，当其对付抵抗纳粹时，不得不将德国人民全体之土地工业及其生活方式摧残殆尽。但现在集中对付日本之力量则较之更为庞大不可衡量，吾等之军力加以吾人之坚决意志为后盾，若予以全部使用，必将使日本军队完全毁灭，无可逃避，而日本之本土亦终必全部残毁。\r\n\r\n　　（四）时机业已到来，日本必须决定一途：其将继续受其一意孤行计算错误而将日本帝国陷于完全毁灭之境之军人统制？抑或走向理智之路？\r\n\r\n　　（五）以下为吾人之条件，吾人决不许更改，亦无其他另一方式。犹豫迁延，更为吾人所不容许。\r\n\r\n　　（六）欺骗及错误领导日本人民使其妄欲征服世界者之权威及势力必须永久铲除，盖吾人坚持非将负责之穷兵黩武主义驱出世界，则和平安全及正义之新秩序势不可能建立。\r\n\r\n　　（七）直至如此之新秩序成立时，及直到日本制造战争之力量业已毁灭而有确实可信之证据时，日本领土须经盟国之军队予以占领，俾吾人在此陈述之基本目的得以完成。\r\n\r\n　　（八）开罗宣言之条件必将实施，而日本之主权必将限于本州、北海道、九州、四国及吾人所决定其可以领有之小岛在内。\r\n\r\n　　（九）日本军队在完全解除武装以后，将被允许其返乡，得以和平从事生产生活之机会。\r\n\r\n　　（十）吾人无意奴役日本民族或消灭其国家，但对于战罪人犯（包括虐待吾人俘虏者在内）将处以法律之裁判。日本政府必须将阻止日本人民民主趋势之复兴及增强之所有障碍予以消除，言论宗教及思想自由以及对于基本人权之重视必须成立。\r\n\r\n　　（十一）日本将被许维持其经济所必需及可以偿付赔款所需要之工业，但可以使其重新武装作战之工业不在其内。为此目的，可准其获得原料（别于统制原料）日本最后参加国际贸易关系当可准许。\r\n\r\n　　（十二）上述目的达到时，日本得依人民自由表示之意志成立一保障和平及负责之政府，届时三国占领之军队即撤退。\r\n\r\n　　（十三）吾人劝告日本政府立即宣布所有日本武装部队无条件投降，并对此种行动诚意实行予以适当之各项保证。除此一途，日本即将迅速完全毁灭。', '中华人民共和国外交部官网', '战略反攻阶段', 1);

-- ----------------------------
-- Table structure for memorial_site
-- ----------------------------
DROP TABLE IF EXISTS `memorial_site`;
CREATE TABLE `memorial_site`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '名称',
  `province` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '所属省份',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '详细地址',
  `intro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '遗址介绍',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '抗战纪念馆与遗址' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of memorial_site
-- ----------------------------
INSERT INTO `memorial_site` VALUES (1, '中国人民抗日战争纪念馆', '北京', '北京市丰台区卢沟桥畔宛平城内', '中国人民抗日战争纪念馆是全国唯一一座全面反映中国人民抗日战争历史的大型综合性专题纪念馆。它坐落于标志着全民族抗战爆发的“七七事变”发生地——北京市丰台区卢沟桥畔的宛平城内，于1987年7月建成并对公众开放，邓小平同志亲笔题写了馆名。纪念馆肩负着传播抗战历史、弘扬抗战精神、开展和平教育的崇高使命');
INSERT INTO `memorial_site` VALUES (2, '侵华日军南京大屠杀遇难同胞纪念馆', '江苏', '南京市建邺区水西门大街418号', '侵华日军南京大屠杀遇难同胞纪念馆是位于江苏省南京市建邺区的一座专题纪念馆，建立在南京大屠杀江东门集体屠杀遗址及遇难者丛葬地的原址之上。该馆于1985年8月15日，即抗日战争胜利40周年纪念日当天建成开放，旨在铭记1937年底至1938年初侵华日军在南京制造的惨案。它是中国唯一一座有关南京大屠杀的专史陈列馆及国家公祭日的主办地，通过遗址、文物陈列与历史展览，承担着铭记历史、珍爱和平的国民教育与国际和平交流的重要使命');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1762012078);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1762012099);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1762012099);

-- ----------------------------
-- Table structure for site_config
-- ----------------------------
DROP TABLE IF EXISTS `site_config`;
CREATE TABLE `site_config`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `key_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '配置键',
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '配置值',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `key_name`(`key_name` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '网站全局静态配置' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of site_config
-- ----------------------------
INSERT INTO `site_config` VALUES (1, 'site_name', '抗战胜利80周年 · 数字档案馆');
INSERT INTO `site_config` VALUES (2, 'copyright', '© 2025 占位符小组');
INSERT INTO `site_config` VALUES (3, 'home_slogan', '铭记历史，码出未来');

-- ----------------------------
-- Table structure for site_stats
-- ----------------------------
DROP TABLE IF EXISTS `site_stats`;
CREATE TABLE `site_stats`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `stat_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '指标名称',
  `stat_value` int NOT NULL COMMENT '指标数值',
  `stat_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '类型标识',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '数据分析统计表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of site_stats
-- ----------------------------

-- ----------------------------
-- Table structure for team_member
-- ----------------------------
DROP TABLE IF EXISTS `team_member`;
CREATE TABLE `team_member`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '姓名',
  `student_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '学号',
  `division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '组内分工',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '小组成员信息表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team_member
-- ----------------------------
INSERT INTO `team_member` VALUES (1, '郝普瑞', '2310412', '数据库建模设计、纪念场馆页面设计与控制逻辑实现、图像资料与史料收集、网页测试');
INSERT INTO `team_member` VALUES (2, '张得涵', '2311383', 'Yii2环境搭建、多个等模块开发、部署脚本编写、Chart.js表格编写、留言审核系统实现、若干文档编写');
INSERT INTO `team_member` VALUES (3, '刘孙延', '2311062', '战役录逻辑开发、时间轴视图优化、用户手册与部署文档的编写、编码格式的优化、代码结构改正');

-- ----------------------------
-- Table structure for timeline_event
-- ----------------------------
DROP TABLE IF EXISTS `timeline_event`;
CREATE TABLE `timeline_event`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `event_year` int NOT NULL COMMENT '发生年份',
  `event_date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '具体日期',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '事件标题',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL COMMENT '事件背景及意义',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = '抗战大事记时间轴' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of timeline_event
-- ----------------------------
INSERT INTO `timeline_event` VALUES (1, 1931, '9月18日', '九一八事变', '日本关东军炸毁沈阳柳条湖附近铁路，反诬中国军队所为，并进攻北大营。标志着日本侵华战争开始，中国人民局部抗战的起点');
INSERT INTO `timeline_event` VALUES (2, 1935, '12月9日', '一二·九运动', '北平学生举行抗日救国游行。促进了中华民族的觉醒，形成全国抗日救亡运动新高潮。');
INSERT INTO `timeline_event` VALUES (3, 1936, '12月12日', '西安事变', '张学良、杨虎城发动“兵谏”，扣留蒋介石。迫使蒋介石接受“停止内战，联共抗日”主张，为全国抗战奠定基础');
INSERT INTO `timeline_event` VALUES (4, 1937, '7月7日', '七七事变（卢沟桥事变）', '日军在卢沟桥附近演习，借口士兵失踪要求进入宛平城搜查，遭拒后发动攻击。标志着日本发动全面侵华战争，中国全国性抗战由此开始');
INSERT INTO `timeline_event` VALUES (5, 1937, '9月22日', '国共第二次合作正式形成', '国民党中央通讯社发表《中国共产党为公布国共合作宣言》。标志着以国共合作为基础的抗日民族统一战线正式成立，全民族抗战局面形成。');
INSERT INTO `timeline_event` VALUES (6, 1937, '12月13日	', '南京沦陷与南京大屠杀开始', '日军攻占南京，随后进行长达数周的大屠杀。是日本军国主义最严重的反人类罪行之一，遇难人数超30万，震惊世界。');
INSERT INTO `timeline_event` VALUES (7, 1940, '8月20日起', '百团大战', '八路军在华北对日军发动大规模进攻和破袭战。沉重打击了日军的“囚笼政策”，鼓舞了全国抗战信心，显示了敌后战场的中流砥柱作用。');
INSERT INTO `timeline_event` VALUES (8, 1945, '8月15日', '日本宣布无条件投降', '日本天皇裕仁广播《终战诏书》，宣布接受《波茨坦公告》。标志着中国人民抗日战争暨世界反法西斯战争取得伟大胜利。');
INSERT INTO `timeline_event` VALUES (9, 1945, '9月2日', '日本签署投降书', '日本外相等在东京湾“密苏里”号战舰上签署投降书。第二次世界大战正式结束。');
INSERT INTO `timeline_event` VALUES (10, 1945, '9月9日', '中国战区受降仪式', '在南京举行，侵华日军总司令冈村宁次向中方代表何应钦呈交投降书。标志着中国战区对日作战胜利结束');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT 10,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'VignaChu', 'h9jrwOURq14Qf1TSxmlEqvXm0-o9NdEZ', '$2y$13$HLk3c1ZTRzHUc/xJKkxI1OS1azWWVZQrXi1lhNRln5r3U7QVtv51e', NULL, '1113820920@qq.com', 10, 1762012786, 1762012786, NULL);

SET FOREIGN_KEY_CHECKS = 1;
