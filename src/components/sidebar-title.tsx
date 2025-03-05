import type { ReactNode } from 'react';

interface SidebarTitleProps {
  icon?: ReactNode;
  children: ReactNode;
}

/**
 * サイドバーで使用するタイトルコンポーネント
 * アイコンとテキストを組み合わせた一貫したデザインを提供します
 */
export default function SidebarTitle({ icon, children }: SidebarTitleProps) {
  return (
    <h2 className="flex items-center gap-1 text-xl font-bold capitalize">
      {icon && <span className="relative top-[0.1rem] size-8">{icon}</span>}
      {children}
    </h2>
  );
}
