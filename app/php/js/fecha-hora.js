const store = new Vuex.Store({
  state: {
    titulo: '¡Te observo!'
  },
  mutations: {

  }
})

const Inicio_rescontra = { template: '<inicio-rescontra></inicio-rescontra>' }

const routes = [
{ path: '/inicio-rescontra', component: Inicio_rescontra }
]

const router = VueRouter.createRouter({
  history: VueRouter.createWebHashHistory(),
  routes,
})

const app = Vue.createApp({
  data() {
      return {
          
      }
  }
})

app.component('inicio-rescontra', {
  template: /*html*/ `
  <div class="row justify-content-center align-items-center vh-100 animate__animated animate__fadeIn">
          
    <div class="col-md-10 mx-auto">
        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-6 mx-auto text-center">
                <img src="../img/password-image.png" class="img-fluid">
            </div>
            <div class="col-md-6 mx-auto">

                <div class="mx-2 mx-md-5 my-md-5 my-3">

                    <h1 class="fw-light h4 mb-4 text-center">¡Restablece tu contraseña!</h1>
                    <p>Escribe tu nueva contraseña y haz click en el
                    botón [...] "Cambiar contraseña"</p>
                    <form @submit.prevent="cambioPass">
                        <input type="password" class="form-control form-control-user mb-3" placeholder="Contraseña" v-model="passUsr" required>
                        <input type="password" class="form-control form-control-user mb-3" placeholder="Repetir contraseña" v-model="passUsrDos" :disabled="estadoPass" required>

                        <div class="text-center" :class="notificaEstadoPass" role="alert">{{validaContrasena}}</div>
                        <div class="form-group" v-html="datos"></div>
                        <button class="btn btn-primary form-control form-control-user my-3" :disabled="this.passUsr != '' && this.passUsrDos != '' && this.validaBtn === true ? this.estadoBtn = flase : this.estadoBtn = true">Restablecer contraseña</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a href="..">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
                    </div>

                </div>
                
            </div>

        </div>                   

    </div>
</div>
  `,
  data () {
      return {
          datos: '',
          correoUrl: '',
          passUsr: '',
          passUsrDos: '',
          msgAlert: '',
          estadoPass: true,
          notificaEstadoPass: '',
          validaBtn: false
      }
  },
  computed: {
      validaContrasena() {
          this.notificaEstadoPass = 'small alert alert-light text-muted'

          if (this.passUsr.length >= 6) {

            this.estadoPass = false
            this.msgAlert = 'La contraseña debe tener al menos 6 caracteres'
            this.validaBtn = false

            if (this.passUsrDos.length >= 6) {

              if (this.passUsr === this.passUsrDos) {

                this.notificaEstadoPass = 'small alert alert-success'
                this.msgAlert = 'Contraseña valida'
                this.validaBtn = true

              } else {
                this.notificaEstadoPass = 'small alert alert-danger'
                this.msgAlert = '¡Error! Las contraseñas que escribió no coinciden'
                this.validaBtn = false
              }



            } else {
              this.estadoPass = false
              this.validaBtn = false
            }

          } else {
            this.msgAlert = 'La contraseña debe tener al menos 6 caracteres'

            if (this.passUsrDos != '') {
              this.estadoPass = false
              this.validaBtn = false
            } else {
              this.estadoPass = true
              this.validaBtn = false
            }

          } 

          return this.msgAlert
        }
  },
  methods: {
      leerURL () {
          let params = new URLSearchParams(location.search);
          var correoMd5 = params.get('rCorreo');
          this.correoUrl = correoMd5
      },
      cambioPass () {
        axios.post('../resetPws/inicio.app', {
            opcion: 1,
            correoUrl: this.correoUrl,
            passUsr: this.passUsr
        })
        .then(response => {
          if (response.data === 'correcto') {
              Swal.fire({
                  icon: 'success',
                  title: '¡Listo! Contraseña restablecida',
                  showConfirmButton: false,
                  timer: 2000,
                  onClose: () => {  
                    window.location="/dragones";
                  }
              })
          }else{
              this.datos = response.data
              console.log(response.data)
          }
      })
    }
  },
  created () {
      
  },
  mounted() {
      this.leerURL()
  },
})