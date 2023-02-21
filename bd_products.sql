ALTER TABLE product_assignment
   ADD FOREIGN KEY (product_id)
      REFERENCES product (id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
;
ALTER TABLE product_assignment
   ADD FOREIGN KEY (section_id)
      REFERENCES product_section (id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
;
ALTER TABLE product_assignment
   ADD FOREIGN KEY (type_id)
      REFERENCES product_type (id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
;
ALTER TABLE product_param_variant
   ADD FOREIGN KEY (param_id)
      REFERENCES product_param_name (id)
      ON DELETE CASCADE
      ON UPDATE CASCADE
;
INSERT INTO product_section (url,name,visible) VALUES('https://sad-i-dom.com/uploads/posts/2019-09/1568618052_1.jpg', 'Акациевый мёд', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://poleznenko.ru/wp-content/uploads/2015/10/pchela-koriandr.jpg', 'Кориандровый мёд', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://w-dog.ru/wallpaper/podsolnux-cvetok-zheltyj-pole-leto-priroda/id/309966/', 'Подсолнечниковый мёд', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://gamerwall.pro/uploads/posts/2022-08/1661176762_20-gamerwall-pro-p-letnee-raznotrave-pinterest-33.jpg', 'Мёд разнотравье', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://belokuriha-med.ru/wp-content/uploads/2022/03/IMG_2218-scaled.jpg', 'Акациевый и кориандровый мёд', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://belokuriha-med.ru/wp-content/uploads/2022/03/IMG_2218-scaled.jpg', 'Акациевый и подсолнечниковый мёд', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://belokuriha-med.ru/wp-content/uploads/2022/03/IMG_2218-scaled.jpg', 'Акациевый, кориандровый и подсолнечниковый мёд, разнотравье', 1);
INSERT INTO product_section (url,name,visible) VALUES('https://belokuriha-med.ru/wp-content/uploads/2022/03/IMG_2218-scaled.jpg', 'Подсолнечниковый мёд, разнотравье', 1);
INSERT INTO product_type (url,name,visible) VALUES('https://belokuriha-med.ru/wp-content/uploads/2022/03/IMG_2218-scaled.jpg', 'Ассорти', 1);
INSERT INTO product_type (url,name,visible) VALUES('https://www.syl.ru/misc/i/ni/2/8/0/3/0/7/4/i/2803074.jpg', 'Мёд', 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(1, 5, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(2, 6, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(3, 7, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(4, 7, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(5, 7, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(6, 3, 2, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(7, 1, 2, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(8, 8, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(9, 7, 1, 1);
INSERT INTO product_assignment (product_id, section_id, type_id, visible) VALUES(10, 7, 1, 1);
INSERT INTO product_param_name (visible,name) VALUES(1, 'Доставка');
INSERT INTO product_param_name (visible,name) VALUES(1, 'Тара');
INSERT INTO product_param_variant (param_id,name) VALUES(1, 'Самовывоз');
INSERT INTO product_param_variant (param_id,name) VALUES(1, 'Курьерская доставка');
INSERT INTO product_param_variant (param_id,name) VALUES(1, 'Почта России');
INSERT INTO product_param_variant (param_id,name) VALUES(2, 'Пластиковая');
INSERT INTO product_param_variant (param_id,name) VALUES(2, 'Стеклянная');
CREATE VIEW view_products (product_id, product_position, product_url, product_name, product_articul, product_price, product_currency_id, product_price_old, product_notice, product_content, product_visible, section_id, section_position, section_url, section_name, section_notice, section_visible, type_id, type_position, type_url, type_name, type_notice, type_visible, ass_id, ass_product_id, ass_section_id, ass_type_id, ass_visible) AS SELECT * FROM product, product_section, product_type, product_assignment WHERE (product.id = product_assignment.product_id) AND (product_section.id = product_assignment.section_id) AND (product_type.id = product_assignment.type_id);