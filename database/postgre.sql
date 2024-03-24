CREATE TABLE "Users" (
  "id" uuid PRIMARY KEY,
  "email" varchar,
  "password" hash,
  "address" int,
  "type" enum
);

CREATE TABLE "Addresses" (
  "id" int PRIMARY KEY,
  "first_name" varchar,
  "last_name" varchar,
  "street" varchar,
  "postal_code" varchar,
  "city" varchar,
  "country" varchar,
  "phone" varchar,
  "email" varchar
);

CREATE TABLE "Orders" (
  "id" int PRIMARY KEY,
  "user_id" int,
  "created_at" timestamp
);

CREATE TABLE "Products" (
  "id" uuid PRIMARY KEY,
  "name" varchar,
  "description" varchar,
  "specification_id" int,
  "price" float,
  "category_id" int
);

CREATE TABLE "Categories" (
  "id" int PRIMARY KEY,
  "name" varchar
);

CREATE TABLE "OrderItems" (
  "id" int PRIMARY KEY,
  "order_id" int,
  "product_id" int,
  "quantity" int
);

CREATE TABLE "Deliveries" (
  "id" int PRIMARY KEY,
  "order_id" int,
  "delivery_address" int,
  "delivery_status" varchar,
  "delivery_date" timestamp
);

CREATE TABLE "DeliveryItems" (
  "id" int PRIMARY KEY,
  "delivery_id" int,
  "order_item_id" int
);

ALTER TABLE "Addresses" ADD FOREIGN KEY ("id") REFERENCES "Users" ("address");

ALTER TABLE "Addresses" ADD FOREIGN KEY ("id") REFERENCES "Deliveries" ("delivery_address");

ALTER TABLE "Orders" ADD FOREIGN KEY ("user_id") REFERENCES "Users" ("id");

ALTER TABLE "OrderItems" ADD FOREIGN KEY ("product_id") REFERENCES "Products" ("id");

ALTER TABLE "OrderItems" ADD FOREIGN KEY ("order_id") REFERENCES "Orders" ("id");

ALTER TABLE "Products" ADD FOREIGN KEY ("category_id") REFERENCES "Categories" ("id");

ALTER TABLE "Deliveries" ADD FOREIGN KEY ("order_id") REFERENCES "Orders" ("id");

ALTER TABLE "DeliveryItems" ADD FOREIGN KEY ("order_item_id") REFERENCES "OrderItems" ("id");

ALTER TABLE "DeliveryItems" ADD FOREIGN KEY ("delivery_id") REFERENCES "Deliveries" ("id");
