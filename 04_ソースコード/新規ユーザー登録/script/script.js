new Vue({
    el: '#app',
    data(){
        return{
            name: '',
            nikku: '',
            address:'',
            address2: '',
            tel:'',
            mail: '',
            pass: '',
            passcheck: '',
            post: ''
        };
    },
    computed:{
        isInValidName(){
            return this.name.length < 1;
        },
        isInValidNikku(){
            return this.nikku.length < 1;
        },
        isInValidPost(){
            return this.post.length != 8;
        },
        isInValidaddress(){
            return this.address.length < 1;
        },
        isInValidaddress2(){
            const address2 = /^[0-9-]+$/;
            return !address2.test(this.address2);
        },
        isInValidaTel(){
            const tel = this.tel;
            const telisErr = tel.length < 8 || isNaN(Number(tel));
            return telisErr;
        },
        isInValidaMail(){
            const Email = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)
            return !Email.test(this.mail);
        },
        isInValidaPass(){
            const pass = /^[a-zA-Z0-9.?/-@]{8,24}$/;
            return !pass.test(this.pass);
        },
        isInValidaPassCheck(){
            return this.passcheck != this.pass; 
        }
    }
});