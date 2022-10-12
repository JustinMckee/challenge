import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

const Edit = ({attributes, setAttributes}) => {

  const blockProps = useBlockProps();

  const template = [ [ 'core/columns', {}, [
    [ 'core/column', {}, [
      ['core/heading', {placeholder: 'Add Your Headline'}],
      ['core/paragraph', {placeholder: 'Write something interesting that really captures the readers attention...'}],
    ] ],
    [ 'core/column', {}, [
        [ 'core/image' ],
    ] ],
  ] ] ];

  return (
    <div {...blockProps}>
      <InnerBlocks
        template={ template }
        templateLock="all"
      />
    </div>
  )

}

export default Edit
