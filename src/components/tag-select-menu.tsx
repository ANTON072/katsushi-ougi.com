'use client';

import { TagIcon } from '@heroicons/react/24/outline';

import Select from './select';
import SidebarTitle from './sidebar-title';

export default function TagSelectMenu() {
  // タグの選択肢を定義
  const tagOptions = [
    { value: 'typescript', label: 'typescript' },
    { value: 'rails', label: 'rails' },
    { value: 'react', label: 'react' },
    { value: 'vue', label: 'vue' },
    { value: 'ruby', label: 'ruby' },
  ];

  // 選択値が変更された時の処理
  const handleTagChange = (value: string) => {
    console.log(`Selected tag: ${value}`);
    // ここに選択時の処理を追加
  };

  return (
    <div className="space-y-4">
      <SidebarTitle icon={<TagIcon />}>tags</SidebarTitle>
      <Select options={tagOptions} onChange={handleTagChange} defaultValue="typescript" />
    </div>
  );
}
