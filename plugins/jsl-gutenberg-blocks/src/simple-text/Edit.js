import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

const Edit = ({attributes, setAttributes}) => {

  const blockProps = useBlockProps();

  const template = [
    ['core/heading', {placeholder: 'Add Your Headline'}],
    ['core/paragraph', {placeholder: 'Write something interesting that really captures the readers attention...'}],
  ];

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
