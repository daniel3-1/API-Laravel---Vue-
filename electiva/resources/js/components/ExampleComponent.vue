<template>
    <div>
      <h1>Ejemplo de Componente Vue.js</h1>
      <p>{{ message }}</p>
    </div>
</template>
  
  <script>
  export default { 
    data() {
      return {
        message: '¡Hola desde Vue.js!',
      };
    },
  };
  </script>
  
  <style scoped> </style>
  
  