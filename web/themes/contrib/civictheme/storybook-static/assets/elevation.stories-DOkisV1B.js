// phpcs:ignoreFile
import{t as l,D as c,a as u,T as p}from"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";u(p);p.cache(!1);const i=t=>t,d=(t={})=>{const a=l.twig({id:"/app/web/themes/contrib/civictheme/components/00-base/elevation/elevation.stories.twig",data:[{type:"raw",value:`<div class="story-elevation-wrapper">
  `,position:{start:0,end:40}},{type:"logic",token:{type:"Twig.logic.type.for",keyVar:null,valueVar:"i",expression:[{type:"Twig.expression.type.number",value:1,match:["1",null]},{type:"Twig.expression.type.number",value:4,match:["4",null]},{type:"Twig.expression.type.operator.binary",value:"..",precidence:20,associativity:"leftToRight",operator:".."}],position:{start:40,end:59},output:[{type:"raw",value:`    <div class="story-container">
      <div class="story-container__title">Elevation `,position:{start:60,end:146}},{type:"output",position:{start:146,end:153},stack:[{type:"Twig.expression.type.variable",value:"i",match:["i"],position:{start:146,end:153}}]},{type:"raw",value:`</div>
      <div class="story-container__content story-elevation--`,position:{start:153,end:220}},{type:"output",position:{start:220,end:227},stack:[{type:"Twig.expression.type.variable",value:"i",match:["i"],position:{start:220,end:227}}]},{type:"raw",value:`"></div>
    </div>
  `,position:{start:227,end:249}}]},position:{open:{start:40,end:59},close:{start:249,end:261}}},{type:"raw",value:`</div>
`,position:{start:262,end:262}}],precompiled:!0});a.options.allowInlineIncludes=!0;try{let e=t.defaultAttributes?t.defaultAttributes:[];return Array.isArray(e)||(e=Object.entries(e)),i(a.render({attributes:new c(e),...t}))}catch(e){return i("An error occurred whilst rendering /app/web/themes/contrib/civictheme/components/00-base/elevation/elevation.stories.twig: "+e.toString())}},m={title:"Base/Elevation",component:d},r={parameters:{layout:"centered"}};var o,n,s;r.parameters={...r.parameters,docs:{...(o=r.parameters)==null?void 0:o.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  }
}`,...(s=(n=r.parameters)==null?void 0:n.docs)==null?void 0:s.source}}};const w=["Elevation"];export{r as Elevation,w as __namedExportsOrder,m as default};
