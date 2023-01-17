(()=>{var e,t={693:()=>{function e(e){return function(e){if(Array.isArray(e))return t(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||function(e,r){if(e){if("string"==typeof e)return t(e,r);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?t(e,r):void 0}}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}var r=document.getElementById("newChart"),n=document.getElementById("current-price"),o=document.getElementById("current-date"),a=[],l=[],i=[],c=[],s=[];window.fetch(APP_URL+"/get-data-saham").then((function(e){return e.json()})).then((function(t){var u=Object.assign({},t.chart.result[0]),d=u.indicators,p=u.meta,v=u.timestamp,m=Object.assign.apply(Object,e(d.quote)),f=m.low,g=m.high,y=m.open,h=m.close;l.push.apply(l,e(f))&&a.push.apply(a,e(g))&&i.push.apply(i,e(y))&&c.push.apply(c,e(h));var b=Object.assign(d.adjclose[0]).adjclose.reverse(),O=b[0]-b[1],w=(O/b[1]*100).toFixed(2),E=p.regularMarketPrice;n.innerHTML="".concat(E,".00");var j=new Date;o.innerHTML="<span>".concat(moment(j,"MM/DD/YYYY").format("D MMM YYYY"),"</span>");for(var k=0;k<v.length;k++){var A=new Date(1e3*v[k]);s.push(moment(A).format("D MMM YY"))}return new Chart(r,{type:"line",data:{labels:s.reduce((function(e,t){return e.find((function(e){return e===t}))?e:e.concat([t])}),[]),datasets:[{data:c,label:"",borderColor:"rgba(255, 26, 104, 1)",backgroundColor:"rgba(255, 26, 104, 0.2)",fill:{target:{value:0},above:"rgba(255, 26, 104, 0.2)"}}]},options:{scales:{y:{beginAtZero:!1}},plugins:{title:{display:!0,text:"".concat(O,".00 ( ").concat(w,"% )"),color:w<0?"#F24754":"#00873c",font:{size:14}},subtitle:{display:!1,text:"2 Minggu Terakhir"},legend:{display:!1}}}})})).catch((function(e){return console.warn(e)}))},377:()=>{},580:()=>{},212:()=>{},405:()=>{},927:()=>{},767:()=>{}},r={};function n(e){var o=r[e];if(void 0!==o)return o.exports;var a=r[e]={exports:{}};return t[e](a,a.exports,n),a.exports}n.m=t,e=[],n.O=(t,r,o,a)=>{if(!r){var l=1/0;for(u=0;u<e.length;u++){for(var[r,o,a]=e[u],i=!0,c=0;c<r.length;c++)(!1&a||l>=a)&&Object.keys(n.O).every((e=>n.O[e](r[c])))?r.splice(c--,1):(i=!1,a<l&&(l=a));if(i){e.splice(u--,1);var s=o();void 0!==s&&(t=s)}}return t}a=a||0;for(var u=e.length;u>0&&e[u-1][2]>a;u--)e[u]=e[u-1];e[u]=[r,o,a]},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={752:0,170:0,33:0,287:0,364:0,302:0,662:0};n.O.j=t=>0===e[t];var t=(t,r)=>{var o,a,[l,i,c]=r,s=0;if(l.some((t=>0!==e[t]))){for(o in i)n.o(i,o)&&(n.m[o]=i[o]);if(c)var u=c(n)}for(t&&t(r);s<l.length;s++)a=l[s],n.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return n.O(u)},r=self.webpackChunk=self.webpackChunk||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),n.O(void 0,[170,33,287,364,302,662],(()=>n(693))),n.O(void 0,[170,33,287,364,302,662],(()=>n(580))),n.O(void 0,[170,33,287,364,302,662],(()=>n(212))),n.O(void 0,[170,33,287,364,302,662],(()=>n(405))),n.O(void 0,[170,33,287,364,302,662],(()=>n(927))),n.O(void 0,[170,33,287,364,302,662],(()=>n(767)));var o=n.O(void 0,[170,33,287,364,302,662],(()=>n(377)));o=n.O(o)})(),(()=>{var e=document.getElementById("ekspektasi-gaji");e.addEventListener("keyup",(function(t){e.value=o(this.value,"Rp. ")}));var t=document.getElementById("gaji-1");t.addEventListener("keyup",(function(e){t.value=o(this.value,"Rp. ")}));var r=document.getElementById("gaji-2");r.addEventListener("keyup",(function(e){r.value=o(this.value,"Rp. ")}));var n=document.getElementById("gaji-3");function o(e,t){var r=e.replace(/[^,\d]/g,"").toString().split(","),n=r[0].length%3,o=r[0].substr(0,n),a=r[0].substr(n).match(/\d{3}/gi);return a&&(separator=n?".":"",o+=separator+a.join(".")),o=null!=r[1]?o+","+r[1]:o,null==t?o:o?"Rp. "+o:""}n.addEventListener("keyup",(function(e){n.value=o(this.value,"Rp. ")}))})(),function(){var e=document.querySelectorAll(".step").length,t=document.querySelector(".slide-page"),r=document.querySelectorAll(".step .check"),n=document.querySelectorAll(".step .bullet"),o=document.querySelectorAll(".page"),a=document.querySelectorAll(".next"),l=document.querySelectorAll(".prev"),i=o.length;e!==i&&console.warn("Error, number of steps in progress bar do not match number of pages"),document.documentElement.style.setProperty("--stepNumber",i);for(var c=1,s=0;s<a.length;s++)a[s].addEventListener("click",(function(e){e.preventDefault(),inputsValid=d(this),inputsValid&&(t.style.marginLeft="-".concat(100/i*c,"%"),console.log("Step = "+100/i*c),console.log("Current = "+c),n[c-1].classList.add("active"),r[c-1].classList.add("active"),c+=1)}));for(var u=0;u<l.length;u++)l[u].addEventListener("click",(function(e){e.preventDefault(),t.style.marginLeft="-".concat(100/i*(c-2),"%"),n[c-2].classList.remove("active"),r[c-2].classList.remove("active"),c-=1}));function d(e){for(var t=!0,r=e.parentElement.parentElement.querySelectorAll(".form-control"),n=(e.parentElement.parentElement.querySelectorAll("small"),0);n<r.length;n++){var o=r[n].checkValidity();console.log(o),o?(r[n].classList.remove("invalid-input"),window.scrollTo({top:500,behavior:"smooth"})):(t=!1,r[n].classList.add("invalid-input"),Swal.fire({icon:"error",title:"Oops...",text:"Please fill out all required fields (*)",showConfirmButton:!0,confirmButtonColor:"#0086FF",confirmButtonText:"OK, Close"}),window.scrollTo({top:500,behavior:"smooth"}))}return t}}();
