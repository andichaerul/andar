var app = new Framework7({
  touch: {
    disableContextMenu: false,
  },
  // App root element
  root: '#app',
  // App Name
  name: 'My App',
  
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  smartSelect: {
    closeOnSelect:'true',
  },
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      path:'/',
    redirect: '/about/',
    },
  
    {
      path: '/about/',
      url: 'about.html',

    },
    {
      path: '/one/',
      componentUrl: './one.html',
    },
    {
      path: '/result/',
      componentUrl: './result.html',
    },
    {
      path: '/sendlapor/',
      componentUrl: './sendlapor.html',
    },
    {
      path: '/loadberita/',
      componentUrl: './loadberita.html',
    },
    
    {
      path: '/seat/',
      componentUrl: './seat.html',
      options: {
        animate: false,
      },
    },
    {
      path: '/pax_form/',
      componentUrl: './pax_form.html',
    },
    {
      path: '/biodata/',
      componentUrl: './biodata.html',
    },    
  ],
  calendar: {
    url: 'calendar/',
    dateFormat: 'yyyy/dd/mm',
  },
});
var $$ = Dom7;

var date = new Date();
// add a day
var sasa = date.setDate(date.getDate() + 1);
var mainView = app.views.create('.view-main', {
  stackPages : 'true',
});
var popup = app.popup.create({
});
var calendarDefault = app.calendar.create({
  dateFormat: 'yyyy/mm/dd',
  inputEl: '#calendar-default',
  //disabled: {
  //      from: new Date(0, 1, 1),
  //      to: new Date(sasa)
  //  },
    closeOnSelect:'true',
});

 
var toastBottom = app.toast.create({
  text: 'Anda belum memasukkan URL Berita',
  closeTimeout: 2000,
});
var namapelaporvalidasi = app.toast.create({
  text: 'Harap isi nama lengkap anda',
  closeTimeout: 2000,
});
var emailpelaporvalidasi = app.toast.create({
  text: 'Harap isi Email anda',
  closeTimeout: 2000,
});
var urlpelaporvalidasi = app.toast.create({
  text: 'Harap isi URL berita yang anda ingin masukkan',
  closeTimeout: 2000,
});
var komentarpelaporvalidasi = app.toast.create({
  text: 'Harap isi pesan mengenai berita yg anda ingin laporkan',
  closeTimeout: 2000,
});

$$('#cek-berita').on('click', function(){
  var url= document.getElementById("url").value;   
    
  if (url==null || url=="" )
        {
            toastBottom.open();
            return false;
        }    
  else{
     mainView.router.navigate('/result/');
  }                      
});
$$('#kirim-laporan').on('click', function(){
  var namapelapor= document.getElementById("namapelapor").value;   
  var emailpelapor= document.getElementById("emailpelapor").value;
  var urlpelapor= document.getElementById("urlpelapor").value;   
  var komentarpelapor= document.getElementById("komentarpelapor").value;   
    
  if (namapelapor==null || namapelapor=="" )
        {
            namapelaporvalidasi.open();
            return false;
        }
  if (emailpelapor==null || emailpelapor=="" )
        {
            emailpelaporvalidasi.open();
            return false;
        } 
  if (urlpelapor==null || urlpelapor=="" )
        {
            urlpelaporvalidasi.open();
            return false;
        }
  if (komentarpelapor==null || komentarpelapor=="" )
        {
            komentarpelaporvalidasi.open();
            return false;
        }                           
  else{
     mainView.router.navigate('/sendlapor/');
     app.popup.close('.my-popup');
  }                      
});







