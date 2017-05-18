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
    console.log(id_usuario);
    var equipos = [
        {
            "id":1,
            "equipo":"America",
            "url":"img/equipos/america.jpg"
        },{
            "id":2,
            "equipo":"Cruz Azul",
            "url":"img/equipos/america.jpg"
        },{
            "id":3,
            "equipo":"Chivas",
            "url":"img/equipos/america.jpg"
        },{
            "id":4,
            "equipo":"Monterrey",
            "url":"img/equipos/america.jpg"
        },{
            "id":6,
            "equipo":"Pumas",
            "url":"img/equipos/america.jpg"
        }];
    var sorteo = "1-2,2-3,3-1,4-1,4-3,2-4,1-6"
    var splsorteo = sorteo.split(",");
    function getLocal(current){
        var equipo ={};
        current = current-1;
        if(equipos[current]){
            equipo.name = equipos[current].equipo;
            equipo.url = equipos[current].url;
        }
        return equipo;
    };
    function getVisitante(current){
        var equipo ={};
        current = current-1;
        if(equipos[current]){
            equipo.name = equipos[current].equipo;
            equipo.url = equipos[current].url;
        }
        return equipo;
    };
    function str2obj(str, index){
        var obj = {};
        var dash = str.indexOf("-");
        var local = str.slice(0,dash);
        var visitante = str.slice(dash+1,str.length);
        var localData = getLocal(local);
        var visitanteData = getVisitante(visitante);
        obj.id_partido = index+1;
        obj.localName = localData.name;
        obj.localUrl = localData.url;
        obj.visitanteName = visitanteData.name;
        obj.visitanteUrl = visitanteData.url;
        obj.check = [];
        return obj;
    }
    var sorteoFinal = splsorteo.map(str2obj);
    var newSorteo = str2obj(splsorteo[0]);
    //var equipos = sorteoFinal.find(getVisitante);
    export default {
        data () { /* ES2015 equivalent for: `data: function () {` */
            return {
                sorteo: sorteoFinal,
                req:{
                    id_usuario:id_usuario,
                    id_sorteo:1,
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
            create: function(data){
                axios.post('http://localhost:3000/usuario/reavsetra/sorteos/', {
                    id_usuario: data.id_usuario,
                    id_sorteo: data.id_sorteo,
                    combinacion: data.combinacion.toString(),
                } ).then(response => {
                    console.log(response);
                });
            },
            genera: function () {
                var data = this.sorteo;
                this.req.combinacion = data.map(this.getChecks);
                this.create(this.req);
            }
        }
    }
</script>