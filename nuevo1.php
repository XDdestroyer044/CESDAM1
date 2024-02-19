for $proveedor in doc("index.xml")/datos/proveedores/proveedor
where $proveedor/estado > 15
return $proveedor/ciudad/text()