// phpcs:ignoreFile
import"./button-BQ2j47E1.js";import"./iframe-NeuNAaFs.js";import{C as m}from"./video-player-DYuXYdLG.js";import"./twig-TIIEE6v_.js";import"./_commonjsHelpers-_d1bhYXs.js";import"./video-BpCSMGkP.js";import"./button-BVIl2l8Z.js";import"./icon-tlIshJ_Z.js";import"./text-icon-Bk-7J0GE.js";const v={title:"Molecules/Video Player",component:m,argTypes:{theme:{control:{type:"radio"},options:["light","dark"]},sources:{control:{type:"array"}},poster:{control:{type:"text"}},embedded_source:{control:{type:"text"}},raw_source:{control:{type:"text"}},title:{control:{type:"text"}},width:{control:{type:"text"}},height:{control:{type:"text"}},transcript_link:{control:{type:"object"}},attributes:{control:{type:"text"}},modifier_class:{control:{type:"text"}}}},e={parameters:{layout:"centered"},args:{theme:"light",title:"",width:"550",height:"400",sources:[{url:"demo/videos/demo.webm",type:"video/webm"},{url:"demo/videos/demo.mp4",type:"video/mp4"},{url:"demo/videos/demo.avi",type:"video/avi"}],poster:"demo/videos/demo_poster.png",embedded_source:"",raw_source:"",transcript_link:{text:"View transcript",title:"Open transcription in a new window",url:"https://example.com",is_new_window:!0,is_external:!1,attributes:""},attributes:"",modifier_class:""}},t={parameters:{layout:"centered"},args:{theme:"light",title:"Test video",width:"550",height:"400",sources:null,poster:"",embedded_source:"https://www.youtube.com/embed/C0DPdy98e4c",raw_source:"",transcript_link:{text:"View transcript",title:"Open transcription in a new window",url:"https://example.com",is_new_window:!0,is_external:!1,attributes:""},attributes:"",modifier_class:""}},r={parameters:{layout:"centered"},args:{theme:"light",title:"",width:"550",height:"400",sources:null,poster:"",embedded_source:"",raw_source:'<iframe allowfullscreen="" frameborder="0" height="400" src="https://www.youtube.com/embed/C0DPdy98e4c" width="550"></iframe>',transcript_link:{text:"View transcript",title:"Open transcription in a new window",url:"https://example.com",is_new_window:!0,is_external:!1,attributes:""},attributes:"",modifier_class:""}};var n,o,s;e.parameters={...e.parameters,docs:{...(n=e.parameters)==null?void 0:n.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: '',
    width: '550',
    height: '400',
    sources: [{
      url: 'demo/videos/demo.webm',
      type: 'video/webm'
    }, {
      url: 'demo/videos/demo.mp4',
      type: 'video/mp4'
    }, {
      url: 'demo/videos/demo.avi',
      type: 'video/avi'
    }],
    poster: 'demo/videos/demo_poster.png',
    embedded_source: '',
    raw_source: '',
    transcript_link: {
      text: 'View transcript',
      title: 'Open transcription in a new window',
      url: 'https://example.com',
      is_new_window: true,
      is_external: false,
      attributes: ''
    },
    attributes: '',
    modifier_class: ''
  }
}`,...(s=(o=e.parameters)==null?void 0:o.docs)==null?void 0:s.source}}};var i,a,d;t.parameters={...t.parameters,docs:{...(i=t.parameters)==null?void 0:i.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: 'Test video',
    width: '550',
    height: '400',
    sources: null,
    poster: '',
    embedded_source: 'https://www.youtube.com/embed/C0DPdy98e4c',
    raw_source: '',
    transcript_link: {
      text: 'View transcript',
      title: 'Open transcription in a new window',
      url: 'https://example.com',
      is_new_window: true,
      is_external: false,
      attributes: ''
    },
    attributes: '',
    modifier_class: ''
  }
}`,...(d=(a=t.parameters)==null?void 0:a.docs)==null?void 0:d.source}}};var c,p,l;r.parameters={...r.parameters,docs:{...(c=r.parameters)==null?void 0:c.docs,source:{originalSource:`{
  parameters: {
    layout: 'centered'
  },
  args: {
    theme: 'light',
    title: '',
    width: '550',
    height: '400',
    sources: null,
    poster: '',
    embedded_source: '',
    raw_source: '<iframe allowfullscreen="" frameborder="0" height="400" src="https://www.youtube.com/embed/C0DPdy98e4c" width="550"></iframe>',
    transcript_link: {
      text: 'View transcript',
      title: 'Open transcription in a new window',
      url: 'https://example.com',
      is_new_window: true,
      is_external: false,
      attributes: ''
    },
    attributes: '',
    modifier_class: ''
  }
}`,...(l=(p=r.parameters)==null?void 0:p.docs)==null?void 0:l.source}}};const S=["Sources","EmbeddedSource","RawSources"];export{t as EmbeddedSource,r as RawSources,e as Sources,S as __namedExportsOrder,v as default};
