const button = document.getElementById('dni-button');

button.addEventListener('click', function(){
    fetch('http://localhost:8000/js/data.json').then(async (data) => {
        const info = await cargarData(data.json());
        console.log(info[0])
        renderData(info[0]);
    });
});

const cargarData = async (data) => {
    return data;
}

const renderData = ({dni, primer_nombre, segundo_nombre, apellido_paterno, apellido_materno}) => {
    const primerNombreInput = document.getElementById('primer_nombre');
    const segundoNombreInput = document.getElementById('segundo_nombre');
    const apellidoPaternoInput = document.getElementById('apellido_paterno');
    const apellidoMaternoInput = document.getElementById('apellido_materno');
    primerNombreInput.value = primer_nombre;
    segundoNombreInput.value = segundo_nombre;
    apellidoPaternoInput.value = apellido_paterno;
    apellidoMaternoInput.value = apellido_materno;
}