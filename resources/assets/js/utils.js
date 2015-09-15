module.exports = {
  capitalize: function(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  },
  aplicar: function (array, f) {
    for (var i = 0; i < array.length; i++) {
      f(array[i]);
    }
  }
};
