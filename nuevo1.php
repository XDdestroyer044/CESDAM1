for $libro in doc("index.xml")/bookstore/book/title
let $tit := $libro//title
return $tit