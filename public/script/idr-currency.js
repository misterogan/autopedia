(()=>{var e=document.getElementById("ekspektasi-gaji");e.addEventListener("keyup",(function(t){e.value=u(this.value,"Rp. ")}));var t=document.getElementById("gaji-1");t.addEventListener("keyup",(function(e){t.value=u(this.value,"Rp. ")}));var n=document.getElementById("gaji-2");n.addEventListener("keyup",(function(e){n.value=u(this.value,"Rp. ")}));var a=document.getElementById("gaji-3");function u(e,t){var n=e.replace(/[^,\d]/g,"").toString().split(","),a=n[0].length%3,u=n[0].substr(0,a),i=n[0].substr(a).match(/\d{3}/gi);return i&&(separator=a?".":"",u+=separator+i.join(".")),u=null!=n[1]?u+","+n[1]:u,null==t?u:u?"Rp. "+u:""}a.addEventListener("keyup",(function(e){a.value=u(this.value,"Rp. ")}))})();