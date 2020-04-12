create database tienda;
use tienda;
create table Categorias(
    id_categoria    int(255)	AUTO_INCREMENT        not null,
    categoria       varchar(100)    not null,
    user_cre        varchar(100)    not null,
    fecha_crea      date,
    CONSTRAINT pk_categorias PRIMARY KEY (id_categoria)
)ENGINE=InnoDB;

create table Productos(
    id_producto     int(255)	AUTO_INCREMENT        not null,
    nombre          varchar(250),
    descripcion     mediumtext,
    marca           varchar(50),
    precio          double,
    stock           int(255),
    estado          boolean,
    id_categoria    int(255),
    CONSTRAINT pk_productos PRIMARY KEY (id_producto),
    CONSTRAINT fk_producto_categoria FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria) ON DELETE CASCADE
)ENGINE=InnoDB;

create table Proveedores(
    id_proveedor int(255)	AUTO_INCREMENT       not null,
    nombre      varchar(100)    not null,
    telefono    char(12),
    direccion   varchar(250),
    user_crea   varchar(100),
    fecha_crea  date,
    CONSTRAINT pk_proveedores PRIMARY KEY(id_proveedor)
)ENGINE=InnoDB;

create table Compras(
    id_compra       int(255)	AUTO_INCREMENT        not null,
    id_proveedor    int(255)        not null,
    fecha_compra    date,
    user_crea       varchar(100),
    fecha_crea      date,
    CONSTRAINT pk_compra PRIMARY KEY (id_compra)
)ENGINE=InnoDB;

create table Detalles_Compras(
    id_detalle_compra       int(255)	AUTO_INCREMENT        not null,
    id_compra               int(255)        not null,
    id_producto             int(255)        not null,
    cantidad                int,
    costo                   double,
    CONSTRAINT pk_detalle_compra PRIMARY KEY (id_detalle_compra),
    CONSTRAINT fk_detalle_compra_compra FOREIGN KEY (id_compra) REFERENCES Compras (id_compra) ON DELETE CASCADE,
    CONSTRAINT fk_detalle_Compra_producto FOREIGN KEY (id_producto) REFERENCES Productos (id_producto) ON DELETE CASCADE
)ENGINE=InnoDB;

create table Clientes(
    id_cliente          int(255)	AUTO_INCREMENT        not null,
    nombre              varchar(100),
    apellidos           varchar(100),
    telefono            char(12),
    CONSTRAINT pk_ PRIMARY KEY (id_Cliente)
)ENGINE=InnoDB;

create table Ventas (
    id_venta        int(255)	AUTO_INCREMENT        not null,
    id_cliente      int(255)        not null,
    total           double,
    paga_con        double,
    cambio          double,
    user_crea       varchar(100),
    fecha_crea      date,
    CONSTRAINT pk_venta PRIMARY KEY (id_venta),
    CONSTRAINT fk_venta_cliente FOREIGN KEY (id_cliente) REFERENCES Clientes (id_cliente) ON DELETE CASCADE
)ENGINE=InnoDB;

create table Detalles_Ventas(
    id_detalle_venta        int(255)	AUTO_INCREMENT        not null,
    id_venta                int(255)        not null,
    id_producto             int(255)        not null,
    cantidad                int(255)        not null,
    descuento               double,
    CONSTRAINT pk_detalle_venta PRIMARY KEY (id_detalle_Venta),
    CONSTRAINT fk_detalle_venta_venta FOREIGN KEY (id_venta) REFERENCES Ventas(id_venta) ON DELETE CASCADE,
    CONSTRAINT fk_detalle_venta_producto FOREIGN KEY (id_producto) REFERENCES Productos (id_producto) ON DELETE CASCADE
)ENGINE=InnoDB;

create table Usuarios(
    id_usuario      int(255)	AUTO_INCREMENT        not null,
    nombre          varchar(100),
    apellidos       varchar(100),
    nick            varchar(30),
    pass            varchar(150),
    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
)ENGINE=InnoDB;