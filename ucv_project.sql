/*
 Navicat Premium Data Transfer

 Source Server         : Mysql
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : ucv_project

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 13/06/2021 23:31:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'admin', 'admin@admin.com', '123', '111');

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `id_categoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fechareg_categoria` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoria
-- ----------------------------

-- ----------------------------
-- Table structure for categoriapost
-- ----------------------------
DROP TABLE IF EXISTS `categoriapost`;
CREATE TABLE `categoriapost`  (
  `id_categoriaPost` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_categoriaPost` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `estado_categoriaPost` int(11) NULL DEFAULT NULL COMMENT '1: activo 0: inactivo',
  `cantidadpost_categoriaPost` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_categoriaPost`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoriapost
-- ----------------------------
INSERT INTO `categoriapost` VALUES (1, 'salud', 1, 10);
INSERT INTO `categoriapost` VALUES (2, 'cuidado personal', 1, 5);

-- ----------------------------
-- Table structure for comentario
-- ----------------------------
DROP TABLE IF EXISTS `comentario`;
CREATE TABLE `comentario`  (
  `id_comentario` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechareg_comentario` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `descripcion_comentario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_post` bigint(20) NULL DEFAULT NULL,
  `id_usuario` bigint(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id_comentario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comentario
-- ----------------------------
INSERT INTO `comentario` VALUES (1, '2021-04-11 10:46:43', 'increible post', 1, 1);
INSERT INTO `comentario` VALUES (2, '2021-04-11 10:47:16', 'gracias por los consejos', 1, 1);
INSERT INTO `comentario` VALUES (3, '2021-04-11 10:47:33', 'a poner a prueba, gracias', 1, 1);
INSERT INTO `comentario` VALUES (4, '2021-04-11 10:48:07', 'y eso no es nocivo para la piel?', 1, 1);
INSERT INTO `comentario` VALUES (5, '2021-04-11 12:54:50', 'no funciona', 1, 1);
INSERT INTO `comentario` VALUES (6, '2021-04-11 12:56:15', 'algun link de referencia?', 1, 1);
INSERT INTO `comentario` VALUES (7, '2021-04-11 16:09:44', 'ejejejejejejejeejejej', 1, 1);
INSERT INTO `comentario` VALUES (8, '2021-04-11 22:52:49', 'te llofa tu daddy?', 1, 1);
INSERT INTO `comentario` VALUES (9, '2021-04-18 18:19:15', 'comentario de prueba', 1, 1);
INSERT INTO `comentario` VALUES (10, '2021-04-18 19:56:04', 'comentario de prueba', 1, 1);
INSERT INTO `comentario` VALUES (11, '2021-04-18 18:18:55', 'demostracion', 1, 1);
INSERT INTO `comentario` VALUES (12, '2021-04-18 19:45:08', 'soy un comentario de prueba', 1, 1);
INSERT INTO `comentario` VALUES (13, '2021-04-18 23:04:15', 'jerson se la come doblada', 1, 1);
INSERT INTO `comentario` VALUES (14, '2021-04-25 21:07:10', 'muy buen post', 2, 1);

-- ----------------------------
-- Table structure for empresa
-- ----------------------------
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa`  (
  `id_empresa` bigint(255) NOT NULL AUTO_INCREMENT,
  `nom_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ruc_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fechareg_empresa` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `descripcion_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `logo_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mision_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vision_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valores_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_empresa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of empresa
-- ----------------------------

-- ----------------------------
-- Table structure for perfil
-- ----------------------------
DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil`  (
  `id_perfil` bigint(20) NOT NULL AUTO_INCREMENT,
  `desc_perfil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tipo_perfil` int(11) NOT NULL COMMENT '1: administrador 2: posteador 3: usuario',
  `estado` int(11) NOT NULL COMMENT '1: activo 0: inactivo',
  PRIMARY KEY (`id_perfil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of perfil
-- ----------------------------
INSERT INTO `perfil` VALUES (1, 'usuario', 1, 1);

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post`  (
  `id_post` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fechareg_post` timestamp(0) NULL DEFAULT NULL,
  `id_usuario` bigint(20) NULL DEFAULT NULL,
  `descripcion_post` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `imagen_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_categoriaPost` bigint(20) NULL DEFAULT NULL,
  `peso_post` int(255) NULL DEFAULT NULL COMMENT '1: alto 2: medio 3: bajo',
  `estado_post` int(255) NULL DEFAULT NULL COMMENT '1: activo 0: inactivo',
  `subtitulo_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_post`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES (1, '¿Qué alimentos contienen vitamina D?', '2021-04-11 09:26:20', 1, 'Todos los días escuchamos sobre esta sustancia, pero pocos saben qué alimentos contienen vitamina D y para qué es bueno en tu salud.\r\n\r\nAyuda a fijar el calcio en el organismo y la falta de esta hace que los huesos se debiliten. Su ingesta puede prevenir ', 'https://res.cloudinary.com/dancwxbfx/image/upload/v1616822048/post_1.jpg', 1, 1, 1, 'La verdad sobre los alimentos Buenos');
INSERT INTO `post` VALUES (2, 'Consejos para cuidar naturalmente la piel en otoño', '2021-04-11 09:35:35', 1, 'El bronceado de verano no ha desaparecido del todo cuando empieza a bajar la temperatura y muchos no entramos en cuenta que debemos de tener mayor cuidado con nuestra piel. Santa Natura se preocupa por tu bienestar por ello, hoy compartimos contigo consej', 'https://res.cloudinary.com/dancwxbfx/image/upload/v1618718239/post_3.jpg', 2, 2, 1, 'Los Mejores Consejos del 2021');

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `id_producto` bigint(255) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codigo_producto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detalle_producto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `precio_producto` double NOT NULL,
  `fechareg_producto` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `id_unidadMedida` bigint(255) NULL DEFAULT NULL,
  `id_categoria` bigint(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of producto
-- ----------------------------

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor`  (
  `id_proveedor` bigint(20) NOT NULL AUTO_INCREMENT,
  `razonsoc_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ruc_proveedor` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono_proveedor` int(255) NOT NULL,
  `contacto_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fechareg_proveedor` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `logo_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `web_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion_proveedor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `estado_proveedor` int(255) NULL DEFAULT NULL COMMENT '1: activo 0: inactivo',
  PRIMARY KEY (`id_proveedor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proveedor
-- ----------------------------

-- ----------------------------
-- Table structure for unidadmedida
-- ----------------------------
DROP TABLE IF EXISTS `unidadmedida`;
CREATE TABLE `unidadmedida`  (
  `id_unidadMedida` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_unidadMedida` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `codigo_unidadMedida` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fechareg_unidadMedida` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_unidadMedida`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of unidadmedida
-- ----------------------------

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ape_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fechareg_usuario` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `id_perfil` bigint(255) NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `img_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'rbueno', 'ricardo', 'bueno balbis', 'ricardo_23_91@hotmail.com', '123', '2021-04-18 17:28:37', 1, 'fanatico de la buena musica y la alimentacion sana', 'https://res.cloudinary.com/dancwxbfx/image/upload/v1616480485/avatar_1.jpg');

-- ----------------------------
-- Table structure for valoracionpost
-- ----------------------------
DROP TABLE IF EXISTS `valoracionpost`;
CREATE TABLE `valoracionpost`  (
  `id_valoracion` bigint(20) NOT NULL AUTO_INCREMENT,
  `vistas_valoracion` int(11) NULL DEFAULT NULL,
  `valoracion_valoracion` decimal(18, 2) NULL DEFAULT NULL,
  `id_usuario` bigint(20) NULL DEFAULT NULL,
  `id_post` bigint(20) NULL DEFAULT NULL,
  `fecha_valoracion` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_valoracion`) USING BTREE,
  INDEX `fk_post`(`id_post`) USING BTREE,
  INDEX `fk_usuario`(`id_usuario`) USING BTREE,
  CONSTRAINT `fk_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of valoracionpost
-- ----------------------------
INSERT INTO `valoracionpost` VALUES (1, 5, 2.40, 1, 1, '2021-05-15 12:19:49');
INSERT INTO `valoracionpost` VALUES (2, 3, 3.00, 1, 2, '2020-05-15 12:19:53');

SET FOREIGN_KEY_CHECKS = 1;
