// phpcs:ignoreFile
import{t as i,D as p,a as d,T as c}from"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";d(c);c.cache(!1);const o=t=>t,h=(t={})=>{const r=i.twig({id:"/app/web/themes/contrib/civictheme/components/00-base/scrollspy/scrollspy.stories.twig",data:[{type:"raw",value:`<div class="story-container">
  <div class="story-container__page-content story-scrollspy"></div>
  <button class="story-scrollspy-target1" data-scrollspy data-scrollspy-offset="400">
    This Button appears when the bottom of the red container reaches top when the viewport is scrolled 400px. It disappears when the viewport is scrolled back.
  </button>
  <button class="story-scrollspy-target2" data-scrollspy data-scrollspy-offset="600">
    This Button appears when the bottom of the blue container reaches top when the viewport is scrolled 600px. It disappears when the viewport is scrolled back.
  </button>
</div>
`,position:{start:0,end:0}}],precompiled:!0});r.options.allowInlineIncludes=!0;try{let e=t.defaultAttributes?t.defaultAttributes:[];return Array.isArray(e)||(e=Object.entries(e)),o(r.render({attributes:new p(e),...t}))}catch(e){return o("An error occurred whilst rendering /app/web/themes/contrib/civictheme/components/00-base/scrollspy/scrollspy.stories.twig: "+e.toString())}},w={title:"Base/Utilities/Scrollspy",component:h},s={parameters:{layout:"fullscreen",docs:"Scroll the viewport to see elements appear when it reaches a specific pixel threshold.",html:{disable:!0}}};var a,n,l;s.parameters={...s.parameters,docs:{...(a=s.parameters)==null?void 0:a.docs,source:{originalSource:`{
  parameters: {
    layout: 'fullscreen',
    docs: 'Scroll the viewport to see elements appear when it reaches a specific pixel threshold.',
    html: {
      disable: true
    }
  }
}`,...(l=(n=s.parameters)==null?void 0:n.docs)==null?void 0:l.source}}};const y=["Scrollspy"];export{s as Scrollspy,y as __namedExportsOrder,w as default};
