'use client';

import { CalendarIcon } from '@heroicons/react/24/outline';

import Select from './select';
import SidebarTitle from './sidebar-title';

export default function ArchiveSelectMenu() {
  // アーカイブの選択肢を定義
  const archiveOptions = [
    { value: '2024', label: '2024' },
    { value: '2023', label: '2023' },
    { value: '2022', label: '2022' },
    { value: '2021', label: '2021' },
    { value: '2020', label: '2020' },
    { value: '2019', label: '2019' },
  ];

  // 選択値が変更された時の処理
  const handleArchiveChange = (value: string) => {
    console.log(`Selected archive: ${value}`);
    // ここに選択時の処理を追加
  };

  return (
    <div className="grid gap-4">
      <SidebarTitle icon={<CalendarIcon />}>archives</SidebarTitle>
      <Select options={archiveOptions} onChange={handleArchiveChange} defaultValue="2024" />
    </div>
  );
}
