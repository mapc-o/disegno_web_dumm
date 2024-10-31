var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Web 1 ICO FES Aragòn' });
});
//request, response,
router.get('/ico', function(req,res,nect){
  //abre la pag de formulario
  res.render('formulario', {titulo: 'Ejemplo'});

});

router.post('/procesa',function(req,res,next){
  res.render('resultado',{contenido: req.ok})
})

module.exports = router;
/*
TAREA 30/10cuàles son los verbos o metodos http get post que son averiguar codigos de estado de http (404)
que son las cabeceras de http resumen pequeño*/
