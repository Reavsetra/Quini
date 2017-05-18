<template>
    <form action="">
        <div class="alineacion">
            <div class="partido" v-for="item in sorteo">
            <h3>Partido N° {{item.id_partido}} </h3>
                <div class="equipo">
                    <img src="http://fpoimg.com/60x60?text=Logo" alt="">
                    {{item.localName}}
                </div>
                <div class="equipo">
                    <img src="http://fpoimg.com/60x60?text=Logo" alt="">
                    {{item.visitanteName}}
                </div>
                <div class="resultado">
                    <input v-bind:id="'local-'+item.id_partido" type="checkbox" value="L" v-model="item.check"><label  v-bind:for="'local-'+item.id_partido">Gana Local</label>
                    <input v-bind:id="'empate-'+item.id_partido" type="checkbox" value="E" v-model="item.check"><label v-bind:for="'empate-'+item.id_partido">Empate</label>
                    <input v-bind:id="'visitante-'+item.id_partido" type="checkbox" value="V" v-model="item.check"><label  v-bind:for="'visitante-'+item.id_partido">Gana Visitante</label>
                </div>
            </div>
        </div>
        <div class="small-4 columns">
            <button type="button" class="button expanded" @click='genera'>Enviar</button>
        </div>
    </form>
</template>

<script>
    
    //var equipos = sorteoFinal.find(getVisitante);
    export default {
        data () { /* ES2015 equivalent for: `data: function () {` */
            return {
                sorteo: sorteoFinal,
                req:{
                    id_usuario:id_usuario,
                    id_sorteo:id_sorteo,
                    combinacion: ""
                }
            };
        },
        mounted() {
        },
        methods: {
            getChecks : function(obj){
                var check = obj.check;
                if(check.length>=1){
                    var str = check.toString().split(",").join("-");
                    return str;
                }
            },
            clearChecks: function(obj){
                obj.check="";
                return obj;
            },
            create: function(data){
                axios.post('http://localhost:3000/usuario/reavsetra/sorteos/', {
                    id_usuario: data.id_usuario,
                    id_sorteo: data.id_sorteo,
                    combinacion: data.combinacion.toString(),
                } ).then(response => {
                    console.log(response);
                    this.sorteo.map(this.clearChecks);
                });
            },
            genera: function () {
                var data = this.sorteo;
                this.req.combinacion = data.map(this.getChecks);
                let indice = 1;
                for (var i = 0; i < data.length; i++) { 
                    if(data[i].check.length<=0){
                        alert("Selecciona al menos una opción para cada partido");
                        break;
                    }else {
                        if( indice === data.length){
                            console.log("Todo OK");
                            this.create(this.req);
                        } else {
                            indice++
                        }
                    };
                }
                //
            }
        }
    }
</script>