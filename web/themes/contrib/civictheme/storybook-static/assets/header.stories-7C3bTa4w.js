// phpcs:ignoreFile
import"./button-BQ2j47E1.js";import"./heading-5vaeWlFO.js";import"./link-CPtzaQYl.js";import"./paragraph-Dbschid6.js";import"./logo-CU2QVyZ6.js";import"./search-DfIAunvp.js";import"./mobile-navigation.stories-BQ007_1t.js";import"./navigation.stories.data-CqdFXVYZ.js";import{C as u,H as a}from"./header.stories.data-lCrer0J_.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";import"./text-icon-Bk-7J0GE.js";import"./icon-tlIshJ_Z.js";import"./image-BOoT3N6N.js";import"./button-BVIl2l8Z.js";import"./menu-_Wo-NGqY.js";import"./logo.stories.data-CmjAhB2C.js";import"./constants-Cxr6wAJe.js";const E={title:"Organisms/Header",component:u,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},content_top1:{control:{type:"text"}},content_top2:{control:{type:"text"}},content_top3:{control:{type:"text"}},content_middle1:{control:{type:"text"}},content_middle2:{control:{type:"text"}},content_middle3:{control:{type:"text"}},content_bottom1:{control:{type:"text"}},modifier_class:{control:{type:"text"}}}},e={parameters:{layout:"fullscreen"},args:a.args("light")},r={parameters:{layout:"fullscreen",backgrounds:{default:"Dark"}},args:a.args("dark")},t={parameters:{layout:"fullscreen"},args:a.args("light",{mobileSearchLink:!0})};var o,n,s;e.parameters={...e.parameters,docs:{...(o=e.parameters)==null?void 0:o.docs,source:{originalSource:`{
  parameters: {
    layout: 'fullscreen'
  },
  args: HeaderData.args('light')
}`,...(s=(n=e.parameters)==null?void 0:n.docs)==null?void 0:s.source}}};var p,c,m;r.parameters={...r.parameters,docs:{...(p=r.parameters)==null?void 0:p.docs,source:{originalSource:`{
  parameters: {
    layout: 'fullscreen',
    backgrounds: {
      default: 'Dark'
    }
  },
  args: HeaderData.args('dark')
}`,...(m=(c=r.parameters)==null?void 0:c.docs)==null?void 0:m.source}}};var i,l,d;t.parameters={...t.parameters,docs:{...(i=t.parameters)==null?void 0:i.docs,source:{originalSource:`{
  parameters: {
    layout: 'fullscreen'
  },
  args: HeaderData.args('light', {
    mobileSearchLink: true
  })
}`,...(d=(l=t.parameters)==null?void 0:l.docs)==null?void 0:d.source}}};const T=["Header","HeaderDark","HeaderWithMobileNavSearchLink"];export{e as Header,r as HeaderDark,t as HeaderWithMobileNavSearchLink,T as __namedExportsOrder,E as default};
