var vue = require('vue');
var utils = require('./../utils.js');
var _ = require('lodash');

var multiplicadores  = [
  {id:1, value: 0.5, text: 'Daño x 0.5'},
  {id:2, value:1, text: 'Daño x 1'},
  {id:3, value:2, text: 'Daño x 2'}
];
var tiposExistentes = [
  {id:1, text:'Agua', value:1},
  {id:2, text:'Dragon', value:2},
  {id:3, text:'Volador', value:3}
];

var tipo = {
  nombre: '',
  existe: function (tiposExistentes) {
    for (var i = 0; i < tiposExistentes.length; i++) {
      if (tiposExistentes[i].tipo === this.nombre) {
        return true;
      }
    }
    return false;
  }

};

module.exports = function () {
  return new vue({
    el:'#tipos',
    data: {
      tipo:tipo,
      multiplicadores: multiplicadores,
      primerPanel: true,
      segundoPanel: false,
      listaTipo: [],
      efectividadesContraOponente: [],
      efectividadesDelOponente: [],
      tipoContraOponente: '',
      multContraOponente: '',
      tipoDelOponente: '',
      multDelOponente: ''
    },
    methods:{
      pasarSiguiente:function (e) {
        e.preventDefault();
        this.tipo.nombre = utils.capitalize(this.tipo.nombre);
        if (this.tipo.existe(tiposExistentes)) {
          return;
        }

        this.listaTipo = tiposExistentes;

        this.listaTipo.push({text:this.tipo.nombre, value:5, id:5});
        var f = function (objeto) {
          objeto.efectividad = -1;
        };

        var _efectividadesContraOponente = _.clone(tiposExistentes,true);
        utils.aplicar(_efectividadesContraOponente, f);
        this.efectividadesContraOponente = _efectividadesContraOponente;

        var _efectividadesDelOponente = _.clone(tiposExistentes, true);
        utils.aplicar(_efectividadesDelOponente, f);
        this.efectividadesDelOponente = _efectividadesDelOponente;

        this.segundoPanel = true;
        this.primerPanel = false;
      },
      volverPanelAnterior: function (e) {
        e.preventDefault();
        this.primerPanel = true;
        this.segundoPanel = false;
      },
      agregarEfectividadContraOponente: function (e) {
        e.preventDefault();
        var self = this;
        var objeto = _.find(this.efectividadesContraOponente, function (obj) {
          return obj.id === parseInt(self.tipoContraOponente);
        });
        objeto.efectividad = this.multContraOponente;
      },
      agregarEfectividadDelOponente: function (e) {
        e.preventDefault();
        var self = this;
        var objeto = _.find(this.efectividadesDelOponente, function (obj) {
          return obj.id === parseInt(self.tipoDelOponente);
        });
        objeto.efectividad = this.multDelOponente;
      }
    }
  });
};
