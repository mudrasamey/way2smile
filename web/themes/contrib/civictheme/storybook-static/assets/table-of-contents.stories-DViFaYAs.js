// phpcs:ignoreFile
import{B as b}from"./basic-content-oUCAwDgk.js";import{t as x,D as T,a as k,T as w}from"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";document.addEventListener("DOMContentLoaded",()=>{function i(t){t.hasAttribute("data-table-of-contents-initialised")||(this.target=t,this.position=this.target.getAttribute("data-table-of-contents-position").trim(),this.theme=this.target.hasAttribute("data-table-of-contents-theme")?this.target.getAttribute("data-table-of-contents-theme").trim():"light",this.anchorSelector=this.target.hasAttribute("data-table-of-contents-anchor-selector")?this.target.getAttribute("data-table-of-contents-anchor-selector").trim():"h2",this.anchorScopeSelector=this.target.hasAttribute("data-table-of-contents-anchor-scope-selector")?this.target.getAttribute("data-table-of-contents-anchor-scope-selector").trim():".ct-basic-content",this.title=this.target.hasAttribute("data-table-of-contents-title")?this.target.getAttribute("data-table-of-contents-title").trim():"",this.position=["before","after","prepend","append"].indexOf(this.position.trim())>0?this.position:"before",this.theme=this.theme==="dark"?"dark":"light",this.anchorSelector=this.anchorSelector!==""?this.anchorSelector:"h2",this.anchorScopeSelector=this.anchorScopeSelector!==""?this.anchorScopeSelector:".ct-basic-content",this.init(),this.target.setAttribute("data-table-of-contents-initialised","true"))}i.prototype.init=function(){let t="";const e=this.findLinks(this.anchorSelector,this.anchorScopeSelector);e.length&&(this.title&&(t+=this.renderTitle(this.title)),t+=this.renderLinks(e),t=this.renderContainer(t,this.theme,this.position),this.place(this.target,this.position,t))},i.prototype.findLinks=function(t,e){const a=[],n=new Set;return document.querySelectorAll(e).forEach(c=>{c.querySelectorAll(t).forEach(p=>{let o=p.id||null;const u=p.innerText;if(!o||o.length===0)for(o=this.makeAnchorId(u);c.querySelectorAll(`#${o}`).length||n.has(`#${o}`);)o=`${o}-${Math.random().toString(36).substring(2,5)}`;const l=`#${o}`;n.has(l)||(a.push({title:u,url:l}),p.id=o,n.add(l))})}),a},i.prototype.renderTitle=function(t){return`<h2 class="ct-table-of-contents__title">${t}</h2>`},i.prototype.renderLinks=function(t){let e="";e+='<ul class="ct-table-of-contents__links">';for(const a in t)e+=`
      <li class="ct-table-of-contents__link-item">
        <a class="ct-table-of-contents__link" href="${t[a].url}">${t[a].title}</a>
      </li>
    `;return e+="</ul>",e},i.prototype.renderContainer=function(t,e,a){return`<div class="ct-table-of-contents ct-theme-${e} ct-table-of-contents--position-${a}">${t}</div>`},i.prototype.place=function(t,e,a){const n={before:"beforebegin",after:"afterend",prepend:"afterbegin",append:"beforeend"};t.insertAdjacentHTML(n[e],a)},i.prototype.makeAnchorId=function(t){return t.toLowerCase().replace(/(&\w+?;)/gim," ").replace(/[_.~"<>%|'!*();:@&=+$,/?%#[\]{}\n`^\\]/gim,"").replace(/(^\s+)|(\s+$)/gim,"").replace(/\s+/gm,"-")},document.querySelectorAll("[data-table-of-contents-position]").forEach(t=>{new i(t)})});k(w);w.cache(!1);const d=i=>i,_=(i={})=>{const t=x.twig({id:"/app/web/themes/contrib/civictheme/components/02-molecules/table-of-contents/table-of-contents.twig",data:[{type:"raw",value:"",position:{start:680,end:682}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"links",match:["links"]},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"},{type:"Twig.expression.type.variable",value:"scope_selector",match:["scope_selector"]},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"},{type:"Twig.expression.type.operator.binary",value:"or",precidence:14,associativity:"leftToRight",operator:"or"}],position:{start:682,end:740},output:[{type:"raw",value:`  <div class="container">
    <div class="row">
      <div class="col-xxs-12">
        `,position:{start:741,end:828}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"links",match:["links"]}],position:{start:828,end:842},output:[{type:"raw",value:"          ",position:{start:843,end:853}},{type:"logic",token:{type:"Twig.logic.type.set",key:"theme_class",expression:[{type:"Twig.expression.type.string",value:"ct-theme-%s"},{type:"Twig.expression.type.filter",value:"format",match:["|format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"theme",match:["theme"]},{type:"Twig.expression.type.filter",value:"default",match:["|default","default"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"light"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}],position:{start:853,end:921}},position:{start:853,end:921}},{type:"raw",value:"          ",position:{start:922,end:932}},{type:"logic",token:{type:"Twig.logic.type.set",key:"position_class",expression:[{type:"Twig.expression.type.string",value:"ct-table-of-contents--position-%s"},{type:"Twig.expression.type.filter",value:"format",match:["|format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"position",match:["position"]},{type:"Twig.expression.type.filter",value:"default",match:["|default","default"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:"before"},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}],position:{start:932,end:1029}},position:{start:932,end:1029}},{type:"raw",value:"          ",position:{start:1030,end:1040}},{type:"logic",token:{type:"Twig.logic.type.set",key:"modifier_class",expression:[{type:"Twig.expression.type.string",value:"%s %s %s"},{type:"Twig.expression.type.filter",value:"format",match:["|format","format"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.variable",value:"theme_class",match:["theme_class"]},{type:"Twig.expression.type.comma"},{type:"Twig.expression.type.variable",value:"position_class",match:["position_class"]},{type:"Twig.expression.type.comma"},{type:"Twig.expression.type.variable",value:"modifier_class",match:["modifier_class"]},{type:"Twig.expression.type.filter",value:"default",match:["|default","default"],params:[{type:"Twig.expression.type.parameter.start",value:"(",match:["("]},{type:"Twig.expression.type.string",value:""},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]},{type:"Twig.expression.type.parameter.end",value:")",match:[")"],expression:!1}]}],position:{start:1040,end:1141}},position:{start:1040,end:1141}},{type:"raw",value:`
          <div class="ct-table-of-contents `,position:{start:1142,end:1186}},{type:"output",position:{start:1186,end:1206},stack:[{type:"Twig.expression.type.variable",value:"modifier_class",match:["modifier_class"],position:{start:1186,end:1206}}]},{type:"raw",value:'" ',position:{start:1206,end:1208}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"attributes",match:["attributes"]},{type:"Twig.expression.type.test",filter:"empty",modifier:"not"}],position:{start:1208,end:1240},output:[{type:"output_whitespace_both",position:{start:1240,end:1262},stack:[{type:"Twig.expression.type.variable",value:"attributes",match:["attributes"],position:{start:1240,end:1262}},{type:"Twig.expression.type.filter",value:"raw",match:["|raw","raw"],position:{start:1240,end:1262}}]}]},position:{open:{start:1208,end:1240},close:{start:1262,end:1273}}},{type:"raw",value:`>
            `,position:{start:1273,end:1287}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"title",match:["title"]}],position:{start:1287,end:1301},output:[{type:"raw",value:'              <h2 class="ct-table-of-contents__title">',position:{start:1302,end:1356}},{type:"output",position:{start:1356,end:1367},stack:[{type:"Twig.expression.type.variable",value:"title",match:["title"],position:{start:1356,end:1367}}]},{type:"raw",value:`</h2>
            `,position:{start:1367,end:1385}}]},position:{open:{start:1287,end:1301},close:{start:1385,end:1396}}},{type:"raw",value:"            ",position:{start:1397,end:1409}},{type:"logic",token:{type:"Twig.logic.type.if",stack:[{type:"Twig.expression.type.variable",value:"links",match:["links"]}],position:{start:1409,end:1423},output:[{type:"raw",value:`              <ul class="ct-table-of-contents__links">
                `,position:{start:1424,end:1495}},{type:"logic",token:{type:"Twig.logic.type.for",keyVar:null,valueVar:"link",expression:[{type:"Twig.expression.type.variable",value:"links",match:["links"]}],position:{start:1495,end:1518},output:[{type:"raw",value:`                  <li class="ct-table-of-contents__link-item">
                    <a class="ct-table-of-contents__link" href="`,position:{start:1519,end:1646}},{type:"output",position:{start:1646,end:1660},stack:[{type:"Twig.expression.type.variable",value:"link",match:["link"],position:{start:1646,end:1660}},{type:"Twig.expression.type.key.period",position:{start:1646,end:1660},key:"url"}]},{type:"raw",value:'">',position:{start:1660,end:1662}},{type:"output",position:{start:1662,end:1678},stack:[{type:"Twig.expression.type.variable",value:"link",match:["link"],position:{start:1662,end:1678}},{type:"Twig.expression.type.key.period",position:{start:1662,end:1678},key:"title"}]},{type:"raw",value:`</a>
                  </li>
                `,position:{start:1678,end:1723}}]},position:{open:{start:1495,end:1518},close:{start:1723,end:1735}}},{type:"raw",value:`              </ul>
            `,position:{start:1736,end:1768}}]},position:{open:{start:1409,end:1423},close:{start:1768,end:1779}}},{type:"raw",value:`          </div>
        `,position:{start:1780,end:1805}}]},position:{open:{start:828,end:842},close:{start:1805,end:1815}}},{type:"logic",token:{type:"Twig.logic.type.else",match:["else"],position:{start:1805,end:1815},output:[{type:"raw",value:`          <div
            data-table-of-contents-theme="`,position:{start:1816,end:1873}},{type:"output",position:{start:1873,end:1884},stack:[{type:"Twig.expression.type.variable",value:"theme",match:["theme"],position:{start:1873,end:1884}}]},{type:"raw",value:`"
            data-table-of-contents-title="`,position:{start:1884,end:1928}},{type:"output",position:{start:1928,end:1939},stack:[{type:"Twig.expression.type.variable",value:"title",match:["title"],position:{start:1928,end:1939}}]},{type:"raw",value:`"
            data-table-of-contents-anchor-selector="`,position:{start:1939,end:1993}},{type:"output",position:{start:1993,end:2014},stack:[{type:"Twig.expression.type.variable",value:"anchor_selector",match:["anchor_selector"],position:{start:1993,end:2014}}]},{type:"raw",value:`"
            data-table-of-contents-anchor-scope-selector="`,position:{start:2014,end:2074}},{type:"output",position:{start:2074,end:2094},stack:[{type:"Twig.expression.type.variable",value:"scope_selector",match:["scope_selector"],position:{start:2074,end:2094}}]},{type:"raw",value:`"
            data-table-of-contents-position="`,position:{start:2094,end:2141}},{type:"output",position:{start:2141,end:2155},stack:[{type:"Twig.expression.type.variable",value:"position",match:["position"],position:{start:2141,end:2155}}]},{type:"raw",value:`"
          >`,position:{start:2155,end:2181}},{type:"logic",token:{type:"Twig.logic.type.block",blockName:"content_block",position:{start:2181,end:2208},output:[{type:"raw",value:"",position:{start:2209,end:2223}},{type:"output_whitespace_both",position:{start:2223,end:2242},stack:[{type:"Twig.expression.type.variable",value:"content",match:["content"],position:{start:2223,end:2242}},{type:"Twig.expression.type.filter",value:"raw",match:["|raw","raw"],position:{start:2223,end:2242}}]},{type:"raw",value:"",position:{start:2242,end:2255}}]},position:{open:{start:2181,end:2208},close:{start:2255,end:2271}}},{type:"raw",value:`</div>
        `,position:{start:2272,end:2297}}]},position:{open:{start:1805,end:1815},close:{start:2297,end:2308}}},{type:"raw",value:`      </div>
    </div>
  </div>
`,position:{start:2309,end:2342}}]},position:{open:{start:682,end:740},close:{start:2342,end:2353}}}],precompiled:!0});t.options.allowInlineIncludes=!0;try{let e=i.defaultAttributes?i.defaultAttributes:[];return Array.isArray(e)||(e=Object.entries(e)),d(t.render({attributes:new T(e),...i}))}catch(e){return d("An error occurred whilst rendering /app/web/themes/contrib/civictheme/components/02-molecules/table-of-contents/table-of-contents.twig: "+e.toString())}},H={title:"Molecules/Table Of Contents",component:_,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},title:{control:{type:"text"}},anchor_selector:{control:{type:"text"}},scope_selector:{control:{type:"text"}},position:{control:{type:"radio"},options:["before","after","prepend","append"]},modifier_class:{control:{type:"text"}},attributes:{control:{type:"text"}}}},s={args:{theme:"light",title:"On this page",links:[{title:"Link 1",url:"/"},{title:"Link 2",url:"/"},{title:"Link 3",url:"/"}],position:"before",modifier_class:"",attributes:""}},r={parameters:{layout:"centered"},args:{theme:"light",title:"On this page",anchor_selector:"h2",scope_selector:".ct-basic-content",position:"before",content:b({content:`
      <h2>Heading 2 - 1</h2>
      <p>Ex cillum irure id occaecat aliquip in cillum aute occaecat ullamco in dolore nulla et veniam sed consectetur ut excepteur eu eiusmod excepteur nulla id mollit veniam deserunt ea nostrud.</p>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
      <p>Consectetur veniam exercitation voluptate reprehenderit in esse est magna minim sunt cupidatat reprehenderit ut pariatur cillum do aute adipisicing commodo voluptate quis in tempor eu irure velit esse non dolore officia sit cupidatat officia fugiat mollit eu.</p>
      <h2>Heading 2 - 2</h2>
      <p>Est incididunt irure eu elit eiusmod incididunt occaecat labore aute in ad non irure sunt ad ut nostrud commodo do fugiat fugiat tempor occaecat mollit sunt in id sed commodo enim occaecat eu proident nostrud fugiat cupidatat.</p>
      <h2>Heading 2 - 3</h2>
      <p>Nulla sed cupidatat irure quis veniam ut in in pariatur do minim adipisicing minim exercitation magna eiusmod culpa tempor.</p>
    `}),modifier_class:"",attributes:""}};var m,y,h;s.parameters={...s.parameters,docs:{...(m=s.parameters)==null?void 0:m.docs,source:{originalSource:`{
  args: {
    theme: 'light',
    title: 'On this page',
    links: [{
      title: 'Link 1',
      url: '/'
    }, {
      title: 'Link 2',
      url: '/'
    }, {
      title: 'Link 3',
      url: '/'
    }],
    position: 'before',
    modifier_class: '',
    attributes: ''
  }
}`,...(h=(y=s.parameters)==null?void 0:y.docs)==null?void 0:h.source}}};var g,f,v;r.parameters={...r.parameters,docs:{...(g=r.parameters)==null?void 0:g.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: 'On this page',
    anchor_selector: 'h2',
    scope_selector: '.ct-basic-content',
    position: 'before',
    content: BasicContent({
      content: \`
      <h2>Heading 2 - 1</h2>
      <p>Ex cillum irure id occaecat aliquip in cillum aute occaecat ullamco in dolore nulla et veniam sed consectetur ut excepteur eu eiusmod excepteur nulla id mollit veniam deserunt ea nostrud.</p>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
      <p>Consectetur veniam exercitation voluptate reprehenderit in esse est magna minim sunt cupidatat reprehenderit ut pariatur cillum do aute adipisicing commodo voluptate quis in tempor eu irure velit esse non dolore officia sit cupidatat officia fugiat mollit eu.</p>
      <h2>Heading 2 - 2</h2>
      <p>Est incididunt irure eu elit eiusmod incididunt occaecat labore aute in ad non irure sunt ad ut nostrud commodo do fugiat fugiat tempor occaecat mollit sunt in id sed commodo enim occaecat eu proident nostrud fugiat cupidatat.</p>
      <h2>Heading 2 - 3</h2>
      <p>Nulla sed cupidatat irure quis veniam ut in in pariatur do minim adipisicing minim exercitation magna eiusmod culpa tempor.</p>
    \`
    }),
    modifier_class: '',
    attributes: ''
  }
}`,...(v=(f=r.parameters)==null?void 0:f.docs)==null?void 0:v.source}}};const L=["TableOfContents","TableOfContentsAutomatic"];export{s as TableOfContents,r as TableOfContentsAutomatic,L as __namedExportsOrder,H as default};
